<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

/**
 * Description of RuleWithDrawAmount.
 *
 * @author user
 */
class RuleWithDrawAmount implements RuleInterface
{
    //put your code here

    protected $from;
    protected $data;

    public function __construct($from, $data)
    {
        $this->from = $from;
        $this->data = $data;
    }

    public function validate()
    {
        if ($this->from->checkWithDraw($this->data['amount'])) {
            return true;
        }

        return false;
    }

    public function getErrorMsg()
    {
        return 'not enough money to transfer';
    }
}
