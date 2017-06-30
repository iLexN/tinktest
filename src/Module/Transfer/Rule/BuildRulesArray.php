<?php

namespace Tink\Module\Transfer\Rule;

use Tink\Model\Account;

class BuildRulesArray
{
    //put your code here

    private $from;

    private $data;

    private $container;

    public function __construct(Account $from, $data, $container)
    {
        $this->from = $from;
        $this->data = $data;
        $this->container = $container;
    }

    public function buildSameOwnerRule()
    {
        return [
                new RuleWithDrawAmount($this->from, $this->data),
                new RuleDailyLimit($this->from, $this->data),
            ];
    }

    public function buildOtherOwnerRule()
    {
        return  [
                new RuleWithDrawAmountExtraCharge($this->from, $this->data),
                new RuleDailyLimit($this->from, $this->data),
                new RuleApiApprove($this->container),
            ];
    }
}
