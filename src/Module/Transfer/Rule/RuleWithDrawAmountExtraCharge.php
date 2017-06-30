<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

use Tink\Module\Transfer\TransferOtherOwer;

/**
 * Description of RuleWithDrawAmount.
 *
 * @author user
 */
class RuleWithDrawAmountExtraCharge extends RuleWithDrawAmount implements RuleInterface
{
    public function validate()
    {
        $this->data['amount'] += TransferOtherOwer::CHARGE;

        return parent::validate();
    }

    public function getErrorMsg()
    {
        return parent::getErrorMsg();
    }
}
