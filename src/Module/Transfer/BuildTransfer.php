<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\Rule\BuildRulesArray as BuildRule;

/**
 * Description of BuildTransfer.
 *
 * @author user
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

    public function create(Account $from, Account $to, $data)
    {
        $buildRule = new BuildRule($from, $data, $this->container);

        if ($this->isSameOwer($from, $to)) {
            return new TransferSameOwer($this->container, $from, $to, $data, $buildRule->buildSameOwnerRule());
        } else {
            return new TransferOtherOwer($this->container, $from, $to, $data, $buildRule->buildOtherOwnerRule());
        }
    }

    private function isSameOwer(Account $from, Account $to)
    {
        return $from->ower === $to->ower;
    }
}
