<?php

namespace Tink\Module\Transfer;

use Tink\Module\AccountModule;

/**
 * Class TransferOtherOwner
 * @package Tink\Module\Transfer
 */
class TransferOtherOwner extends Transfer implements TransferOwnerInterface
{
    const CHARGE = 100;

    /**
     * @param AccountModule $accountModule
     */
    public function transfer(AccountModule $accountModule)
    {
        $accountModule->amountChange($this->data, 'transferFrom', $this->to, $this->from->id);
        $accountModule->amountChange(['amount' => self::CHARGE], 'charge', $this->from);
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
