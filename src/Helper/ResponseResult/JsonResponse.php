<?php

namespace Tink\Helper\ResponseResult;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Response Result
 */
class JsonResponse implements ResponseResultInterface
{
    private $msg;

    /**
     * Response Result constructor.
     * @param mixed $msg
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Proccess the Response
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getResponse(ResponseInterface $response) : ResponseInterface
    {
        $response->getBody()->write(\json_encode($this->msg));
        $response = $response->withHeader('Content-type', 'application/json');

        return $response;
    }
}
