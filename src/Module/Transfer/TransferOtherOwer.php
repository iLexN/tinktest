<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferOwerInterface;
use Tink\Module\HistoryModule;

class TransferOtherOwer implements TransferOwerInterface{

    /**
     * @var \Slim\Container
     */
    public $container;

    /**
     * @var Account
     */
    public $from;

    /**
     * @var Account
     */
    public $to;

    /**
     * @var array
     */
    public $data;

    private $charge = 100;

    public function __construct(\Slim\Container $container,Account $from, Account $to, $data)
    {
        $this->container = $container;
        $this->from = $from;
        $this->to = $to;
        $this->data = $data;
    }

    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        $this->data['amount'] = $this->data['amount'] + $this->charge;

        $history->create($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        if (!$this->checkWithDrawAmount()) {
            return ['status'=>false, 'msg'=>'not enough money to transfer'];
        }

        if (!$this->checkdailyLimit()) {
            return ['status'=>false, 'msg'=>'over daily limit'];
        }

        if (!$this->getApiApprove()) {
            return ['status'=>false, 'msg'=>'not approve'];
        }

        return true;
    }

    private function checkWithDrawAmount()
    {
        if ($this->from->checkWithDraw($this->data['amount'] + $this->charge)) {
            return true;
        }

        return false;
    }

    private function checkdailyLimit()
    {
        $sum = $this->from->history()->where('created_at', 'like', date('Y-m-d').'%')
                ->where('action', 'transferTo')->sum('amount');

        return ($sum + $this->data['amount']) <= 10000;
    }

    private function getApiApprove()
    {
        $httpClient = $this->container['httpClient'];
        $response = $httpClient->request('GET', '/test/success.json');

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        $body = \json_decode((string) $response->getBody(), true);
        if (isset($body['status']) && $body['status'] !== success) {
            return false;
        }

        return true;
    }
}
