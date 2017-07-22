<?php

namespace Tink\Module\Transfer;

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
     * @var string Error Msg
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
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }
}
