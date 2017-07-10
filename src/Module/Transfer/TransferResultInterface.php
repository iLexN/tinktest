<?php

namespace Tink\Module\Transfer;


interface TransferResultInterface
{
    public function getStatus();

    public function getMsg();
}