<?php

namespace Tink\Module;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferOtherOwer;
use Tink\Module\Transfer\TransferSameOwer;


/**
 * Description of UserModule.
 *
 * @author user
 */
class TransferModule
{
    /**
     * @var \Slim\Container
     */
    public $container;

    /**
     * @var Account
     */
    public $from;

    /**
     * @var Account
     */
    public $to;

    /**
     * @var array
     */
    public $data;

    /**
     * @var \Tink\Module\Transfer\TransferOwerInterface
     */
    private $transfer;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function setAcc(Account $from, Account $to, $data)
    {
        $this->from = $from;
        $this->to = $to;

        if ( $this->isSameOwer()){
            $this->transfer = new TransferSameOwer($this->container, $from, $to, $data);
        } else {
            $this->transfer = new TransferOtherOwer($this->container, $from, $to, $data);
        }

    }

    public function transfer(HistoryModule $history)
    {
        $this->transfer->transfer($history);
    }

    public function canTransfer()
    {
        return $this->transfer->canTransfer();
    }

    private function isSameOwer()
    {
        return $this->from->ower === $this->to->ower;
    }

}
