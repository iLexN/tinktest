<?php

namespace Tink\Helper\ResponseResult;

use Psr\Http\Message\ResponseInterface;

interface ResponseResultInterface
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
