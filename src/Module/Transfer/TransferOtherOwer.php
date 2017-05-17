<?php

namespace Tink\Module\Transfer;

use Tink\Module\HistoryModule;

class TransferOtherOwer extends Transfer implements TransferOwerInterface
{
    private $charge = 100;

    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        $history->create(['amount'=>$this->charge], 'charge', $this->from);
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

        return ['status'=>true, 'msg'=>'can transfer'];
    }

    private function checkWithDrawAmount()
    {
        if ($this->from->checkWithDraw($this->data['amount'] + $this->charge)) {
            return true;
        }

        return false;
    }

    private function getApiApprove()
    {
        $httpClient = $this->container['httpClient'];
        $response = $httpClient->request('GET', '/test/success.json');

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        $body = \json_decode((string) $response->getBody(), true);
        if (isset($body['status']) && $body['status'] !== 'success') {
            return false;
        }

        return true;
    }
}
