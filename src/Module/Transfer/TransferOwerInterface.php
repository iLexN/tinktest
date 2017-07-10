<?php

namespace Tink\Module\Transfer;

use Tink\Module\AcccountModule;

/**
 * Transfer Owner Interface.
 */
interface TransferOwerInterface
{
    /**
     * transfer money.
     *
     * @param \Tink\Module\AcccountModule $accountModule
     */
    public function transfer(AcccountModule $accountModule);

    /**
     * check can do the transfer.
     *
     * @return array
     */
    public function canTransfer();
}
