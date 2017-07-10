<?php

namespace Tink\Module\Transfer;

use Tink\Module\AccountModule;

/**
 * Transfer Owner Interface.
 */
interface TransferOwnerInterface
{
    /**
     * transfer money.
     *
     * @param \Tink\Module\AccountModule $accountModule
     */
    public function transfer(AccountModule $accountModule);

    /**
     * Check Can Transfer or not.
     * @return \Tink\Module\Transfer\TransferResultInterface
     */
    public function canTransfer(): TransferResultInterface;
}
