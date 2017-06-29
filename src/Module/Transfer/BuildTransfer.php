<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferOtherOwer;
use Tink\Module\Transfer\TransferSameOwer;

/**
 * Description of BuildTransfer
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
        if ($this->isSameOwer($from, $to)) {
            return new TransferSameOwer($this->container, $from, $to, $data, [
                new \Tink\Module\Transfer\Rule\RuleWithDrawAmount($from, $data),
                new \Tink\Module\Transfer\Rule\RuleDailyLimit($from, $data),
            ]);
        } else {
            return new TransferOtherOwer($this->container, $from, $to, $data, [
                new \Tink\Module\Transfer\Rule\RuleWithDrawAmountExtraCharge($from, $data),
                new \Tink\Module\Transfer\Rule\RuleDailyLimit($from, $data),
                new \Tink\Module\Transfer\Rule\RuleApiApprove($this->container),
            ]);
        }
    }

    private function isSameOwer(Account $from, Account $to)
    {
        return $from->ower === $to->ower;
    }
}
