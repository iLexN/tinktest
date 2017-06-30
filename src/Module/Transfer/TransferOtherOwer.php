<?php

namespace Tink\Module\Transfer;

use Tink\Module\HistoryModule;

class TransferOtherOwer extends Transfer implements TransferOwerInterface
{
    const CHARGE = 100;

    public function transfer(HistoryModule $history)
    {
        $history->create($this->data, 'transferFrom', $this->to, $this->from->id);

        $history->create(['amount'=> self::CHARGE], 'charge', $this->from);
        $history->create($this->data, 'transferTo', $this->from, $this->to->id);
    }

    public function canTransfer()
    {
        return parent::canTransfer();
    }
}
