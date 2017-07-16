<?php

namespace Tink\Helper\ResponseResult;

use Psr\Http\Message\ResponseInterface;

interface ResponseResultInterface
{
    /**
     * Proccess the Response
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getResponse(ResponseInterface $response) : ResponseInterface;
}
