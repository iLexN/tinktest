<?php

namespace Tink\Module;

use \Tink\Model\Account;
use Tink\Module\HistoryModule;
use \Valitron\Validator;

/**
 * Description of UserModule.
 *
 * @author user
 */
class TransferModule
{
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

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function setAcc(Account $from, Account $to, $data)
    {
        $this->from = $from;
        $this->to = $to;
        $this->data = $data;
    }

    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        if (!$this->isSameOwer()) {
            $this->data['amount'] = $this->data['amount'] + 100;
        }

        $history->create($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        if (!$this->checkWithDrawAmount()) {
            return ['status'=>false,'msg'=>'not enough money to transfer'];
        }

        if (!$this->checkdailyLimit()) {
            return ['status'=>false,'msg'=>'over daily limit'];
        }

        if ($this->isSameOwer()) {
            return true;
        }

        if (!$this->getApiApprove()) {
            return ['status'=>false,'msg'=>'not approve'];
        }

        return true;
    }

    private function checkWithDrawAmount()
    {
        if ($this->isSameOwer() && $this->from->checkWithDraw($this->data['amount'])) {
            return true;
        }

        if (!$this->isSameOwer() && $this->from->checkWithDraw($this->data['amount']+100)) {
            return true;
        }

        return false;
    }

    private function isSameOwer()
    {
        return $this->from->ower === $this->to->ower;
    }

    private function checkdailyLimit()
    {
        $sum = $this->from->history()->where('created_at', 'like', date("Y-m-d").'%')
                ->where('action', 'transferTo')->sum('amount');
        return ($sum + $this->data['amount'] ) <= 10000;
    }

    private function getApiApprove()
    {
        $httpClient = $this->container['httpClient'];
        $response = $httpClient->request('GET', '/test/success.json');

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        $body = \json_decode((string) $response->getBody(), true) ;
        if (isset($body['status']) && $body['status'] !== success) {
            return false;
        }

        return true;
    }
}
