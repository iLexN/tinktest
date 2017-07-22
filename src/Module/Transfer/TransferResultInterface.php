<?php

namespace Tink\Module\Transfer;

interface TransferResultInterface
{
    /**
     * get can transfer or not
     * @return bool
     */
    public function getStatus(): bool;


    /**
     * get the msg of the transfer Result
     * @return string
     */
    public function getMsg(): string;
}
