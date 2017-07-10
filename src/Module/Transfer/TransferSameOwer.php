<?php

namespace Tink\Module\Transfer;

use Tink\Module\AcccountModule;

class TransferSameOwer extends Transfer implements TransferOwerInterface
{
    public function transfer(AcccountModule $acccountModule)
    {
        //$history->create($this->data, 'transferFrom', $this->to, $this->from->id);
        //$history->create($this->data, 'transferTo', $this->from, $this->to->id);

        $acccountModule->amountChange($this->data, 'transferFrom', $this->to ,$this->from->id);
        $acccountModule->amountChange($this->data, 'transferTo', $this->from , $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
