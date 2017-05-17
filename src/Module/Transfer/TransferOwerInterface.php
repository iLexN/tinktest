<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer;

use \Tink\Module\HistoryModule;

/**
 *
 * @author user
 */
interface TransferOwerInterface {

    /**
     *
     * @param \Tink\Module\HistoryModule $history
     */
    public function transfer(HistoryModule $history);

    /**
     *
     * @return boolean
     */
    public function canTransfer();
}
