<?php

namespace Tink\Controller\CollrollerResult;

use Psr\Http\Message\ResponseInterface;

interface ControllerResultInterface
{
    /**
     * get the response status
     * @return bool
     */
    public function getStatus(): bool;

    public function getOutput();
    
    /**
     * Proccess the Response
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getResponse(ResponseInterface $response) : ResponseInterface;
}
