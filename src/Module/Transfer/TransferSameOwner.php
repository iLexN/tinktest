<?php

namespace Tink\Module\Transfer;

use Tink\Module\AccountModule;

class TransferSameOwner extends Transfer implements TransferOwnerInterface
{
    public function transfer(AccountModule $accountModule)
    {
        //$history->create($this->data, 'transferFrom', $this->to, $this->from->id);
        //$history->create($this->data, 'transferTo', $this->from, $this->to->id);

        $accountModule->amountChange($this->data, 'transferFrom', $this->to, $this->from->id);
        $accountModule->amountChange($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
