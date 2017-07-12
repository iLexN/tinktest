<?php

namespace Tink\Controller;

/**
 * Class TransferResult
 */
class ControllerResult implements ControllerResultInterface
{
    /**
     * @var bool
     */
    private $status;

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
    public function getStatus(): bool
    {
        return $this->status;
    }

    public function getOutput()
    {
        return $this->msg;
    }
}
