<?php

namespace Tink\Module\Transfer;

use Tink\Module\HistoryModule;

interface TransferOwerInterface
{
    /**
     * transfer money.
     *
     * @param \Tink\Module\HistoryModule $history
     */
    public function transfer(HistoryModule $history);

    /**
     * check can do the transfer.
     *
     * @return array
     */
    public function canTransfer();
}
