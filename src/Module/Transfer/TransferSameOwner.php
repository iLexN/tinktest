<?php

namespace Tink\Module\Transfer;

use Tink\Module\AccountModule;

class TransferSameOwner extends Transfer implements TransferOwnerInterface
{
    /**
     * @param AccountModule $accountModule
     */
    public function transfer(AccountModule $accountModule)
    {
        //$history->create($this->data, 'transferFrom', $this->to, $this->from->id);
        //$history->create($this->data, 'transferTo', $this->from, $this->to->id);

        $accountModule->amountChange($this->data, 'transferFrom', $this->to, $this->from->id);
        $accountModule->amountChange($this->data, 'transferTo', $this->from, $this->to->id);
    }

    /**
     * @return TransferResultInterface
     */
    public function canTransfer(): TransferResultInterface
    {
        return parent::canTransfer();
    }
}
