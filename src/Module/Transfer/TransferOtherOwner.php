<?php

namespace Tink\Module\Transfer;

use Tink\Module\AccountModule;

class TransferOtherOwner extends Transfer implements TransferOwnerInterface
{
    const CHARGE = 100;

    /**
     * @param AccountModule $accountModule
     */
    public function transfer(AccountModule $accountModule): void
    {
        //$history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        //$history->create(['amount'=> self::CHARGE], 'charge', $this->from);
        //$history->create($this->data, 'transferTo', $this->from, $this->to->id);

        $accountModule->amountChange($this->data, 'transferFrom', $this->to, $this->from->id);

        $accountModule->amountChange(['amount' => self::CHARGE], 'charge', $this->from);
        $accountModule->amountChange($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
