<?php

namespace Tink\Module\Transfer;

use Psr\Container\ContainerInterface;
use Tink\Model\Account;
use Tink\Module\Transfer\Rule\BuildRulesArray as BuildRule;

/**
 * Build Transfer Class.
 */
class BuildTransfer
{
    /**
     * @var ContainerInterface
     */
    public $container;

    /**
     * BuildTransfer constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Get Transfer Class.
     * @param Account $from
     * @param Account $to
     * @param array $data
     * @return \Tink\Module\Transfer\TransferOwnerInterface
     */
    public function create(Account $from, Account $to, array $data): TransferOwnerInterface
    {
        $buildRule = new BuildRule($from, $data, $this->container);

        if ($this->isSameOwner($from, $to)) {
            return new TransferSameOwner($this->container, $from, $to, $data, $buildRule->buildSameOwnerRule());
        } else {
            return new TransferOtherOwner($this->container, $from, $to, $data, $buildRule->buildOtherOwnerRule());
        }
    }

    /**
     * Check is same Owner.
     * @param Account $from
     * @param Account $to
     * @return bool
     */
    private function isSameOwner(Account $from, Account $to): bool
    {
        return $from->ower === $to->ower;
    }
}
