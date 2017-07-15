<?php

namespace Tink\Helper\ResponseResult;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Response Result
 */
class JsonResponse implements ResponseResultInterface
{
    /**
     * @var bool
     */
    private $status;

    private $msg;

    /**
     * Response Result constructor.
     * @param bool $status
     * @param mixed $msg
     */
    public function __construct(bool $status, $msg)
    {
        $this->status = $status;
        $this->msg = $msg;
    }

    /**
     * @return bool
     */
    public function getStatus() : bool
    {
        return $this->status;
    }

    /**
     * Proccess the Response
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getResponse(ResponseInterface $response) : ResponseInterface
    {
        $response->getBody()->write(\json_encode($this->getOutput()));
        $response = $response->withHeader('Content-type', 'application/json');

        return $response;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->msg;
    }
}
