<?php

namespace Tink\Module\Transfer;

interface TransferResultInterface
{
    public function getStatus(): bool;

    public function getMsg(): string;
}
