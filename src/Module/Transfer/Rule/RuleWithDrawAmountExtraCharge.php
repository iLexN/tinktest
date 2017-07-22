<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

use Tink\Module\Transfer\TransferOtherOwner;

/**
 * Description of RuleWithDrawAmount.
 *
 * @author user
 */
class RuleWithDrawAmountExtraCharge extends RuleWithDrawAmount implements RuleInterface
{
    /**
     * @return bool
     */
    public function validate(): bool
    {
        $this->data['amount'] += TransferOtherOwner::CHARGE;

        return parent::validate();
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return parent::getErrorMsg();
    }
}
