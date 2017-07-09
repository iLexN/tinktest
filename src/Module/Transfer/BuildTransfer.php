<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\Rule\BuildRulesArray as BuildRule;

/**
 * Build Transfer Class.
 */
class BuildTransfer
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    /**
     * Get Transfer Class.
     * @param Account $from
     * @param Account $to
     * @param array $data
     * @return \Tink\Module\TransferTransferOwerInterface
     */
    public function create(Account $from, Account $to, $data)
    {
        $buildRule = new BuildRule($from, $data, $this->container);

        if ($this->isSameOwer($from, $to)) {
            return new TransferSameOwer($this->container, $from, $to, $data, $buildRule->buildSameOwnerRule());
        } else {
            return new TransferOtherOwer($this->container, $from, $to, $data, $buildRule->buildOtherOwnerRule());
        }
    }

    /**
     * Check is same Ower.
     * @param Account $from
     * @param Account $to
     * @return bool
     */
    private function isSameOwer(Account $from, Account $to)
    {
        return $from->ower === $to->ower;
    }
}
