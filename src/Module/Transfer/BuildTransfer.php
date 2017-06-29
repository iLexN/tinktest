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
        if ($this->isSameOwer($from , $to)) {
            return new TransferSameOwer($this->container, $from, $to, $data);
        } else {
            return new TransferOtherOwer($this->container, $from, $to, $data);
        }
    }

    private function isSameOwer(Account $from, Account $to)
    {
        return $from->ower === $to->ower;
    }
}
