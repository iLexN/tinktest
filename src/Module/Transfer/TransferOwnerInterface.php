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
     * check can do the transfer.
     *
     * @return array
     */
    public function canTransfer();
}
