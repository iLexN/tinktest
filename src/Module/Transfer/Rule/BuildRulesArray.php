<?php

namespace Tink\Module\Transfer\Rule;

use Tink\Model\Account;

/**
 * Setup the Rule for special case.
 */
class BuildRulesArray
{
    private $from;

    private $data;

    private $container;

    public function __construct(Account $from, $data, $container)
    {
        $this->from = $from;
        $this->data = $data;
        $this->container = $container;
    }

    /**
     * Same Owner Rules.
     *
     * @return RuleInterface[]
     */
    public function buildSameOwnerRule()
    {
        return [
                new RuleWithDrawAmount($this->from, $this->data),
                new RuleDailyLimit($this->from, $this->data),
            ];
    }

    /**
     * other Owner Rules.
     *
     * @return RuleInterface[]
     */
    public function buildOtherOwnerRule()
    {
        return  [
                new RuleWithDrawAmountExtraCharge($this->from, $this->data),
                new RuleDailyLimit($this->from, $this->data),
                new RuleApiApprove($this->container),
            ];
    }
}
