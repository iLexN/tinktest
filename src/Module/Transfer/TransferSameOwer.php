<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferOwerInterface;
use Tink\Module\HistoryModule;

class TransferSameOwer extends Transfer implements TransferOwerInterface{

    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);
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

        return ['status'=>true, 'msg'=>'can transfer'];
    }

    private function checkWithDrawAmount()
    {
        if ($this->from->checkWithDraw($this->data['amount'])) {
            return true;
        }

        return false;
    }

}
