<?php

namespace Tink\Module\Transfer;

use Tink\Module\Transfer\TransferResultInterface;

/**
 * Class TransferResult
 */
class TransferResult implements TransferResultInterface
{
    /**
     * @var bool
     */
    private $status;

    /**
     * @var string
     */
    private $msg;

    /**
     * TransferResult constructor.
     * @param bool $status
     * @param string $msg
     */
    public function __construct($status, $msg)
    {
        $this->status = $status;
        $this->msg = $msg;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }
}