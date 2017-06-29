<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

use Tink\Module\Transfer\Rule\RuleInterface;
use Tink\Module\Transfer\Rule\RuleWithDrawAmount;

/**
 * Description of RuleWithDrawAmount
 *
 * @author user
 */
class RuleWithDrawAmountExtraCharge extends RuleWithDrawAmount implements RuleInterface
{
    //put your code here

    const CHARGE = 100;

    public function validate()
    {
        $this->data['amount'] += self::CHARGE;

        return parent::validate();
    }

    public function getErrorMsg()
    {
        return parent::getErrorMsg();
    }
}
