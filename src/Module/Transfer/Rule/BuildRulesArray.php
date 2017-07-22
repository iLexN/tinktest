<?php

namespace Tink\Module\Transfer\Rule;

use Psr\Container\ContainerInterface;
use Tink\Model\Account;

/**
 * Setup the Rule for special case.
 */
class BuildRulesArray
{
    private $from;

    private $data;

    private $container;

    /**
     * BuildRulesArray constructor.
     * @param Account $from
     * @param array $data
     * @param ContainerInterface $container
     */
    public function __construct(Account $from, array $data, ContainerInterface $container)
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
    public function buildSameOwnerRule(): array
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
    public function buildOtherOwnerRule(): array
    {
        return  [
                new RuleWithDrawAmountExtraCharge($this->from, $this->data),
                new RuleDailyLimit($this->from, $this->data),
                new RuleApiApprove($this->container),
            ];
    }
}
