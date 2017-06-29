<?php

namespace Tink\Module\Transfer;

use Tink\Module\HistoryModule;

class TransferSameOwer extends Transfer implements TransferOwerInterface
{
    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);
        $history->create($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
