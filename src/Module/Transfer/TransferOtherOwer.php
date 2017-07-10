<?php

namespace Tink\Module\Transfer;

use Tink\Module\AcccountModule;

class TransferOtherOwer extends Transfer implements TransferOwerInterface
{
    const CHARGE = 100;

    public function transfer(AcccountModule $acccountModule)
    {
        //$history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        //$history->create(['amount'=> self::CHARGE], 'charge', $this->from);
        //$history->create($this->data, 'transferTo', $this->from, $this->to->id);

        $acccountModule->amountChange($this->data, 'transferFrom', $this->to, $this->from->id);

        $acccountModule->amountChange(['amount'=> self::CHARGE], 'charge', $this->from);
        $acccountModule->amountChange($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
