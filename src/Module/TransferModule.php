<?php

namespace Tink\Module;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferOtherOwer;
use Tink\Module\Transfer\TransferSameOwer;
use Tink\Module\Transfer\TransferOwerInterface;

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

    public function setTransfer(TransferOwerInterface $transfer)
    {
        $this->transfer = $transfer;
    }

    public function transfer(HistoryModule $history)
    {
        $this->transfer->transfer($history);
    }

    public function canTransfer()
    {
        return $this->transfer->canTransfer();
    }

}
