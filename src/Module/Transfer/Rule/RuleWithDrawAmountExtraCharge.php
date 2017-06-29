<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

use Tink\Module\Transfer\Rule\RuleInterface;
/**
 * Description of RuleWithDrawAmount
 *
 * @author user
 */
class RuleWithDrawAmountExtraCharge implements RuleInterface {
    //put your code here

    const CHARGE = 100;


    private $from;
    private $data;

    public function __construct($from , $data) {
        $this->from = $from;
        $this->data = $data;
    }

    public function validate() {
        if ($this->from->checkWithDraw($this->data['amount'] + self::CHARGE)) {
            return true;
        }

        return false;
    }

    public function getErrorMsg() {
        return 'not enough money to transfer';
    }
}
