<?php

namespace Tink\Controller;

interface ControllerResultInterface
{
    public function getStatus(): bool;

    public function getOutput();
}
