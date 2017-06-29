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
        foreach ($this->rules as $rule) {
            if (!$rule->validate()) {
                return ['status'=>false, 'msg'=>$rule->getErrorMsg()];
            }
        }

        return ['status'=>true, 'msg'=>'can transfer'];
    }
}
