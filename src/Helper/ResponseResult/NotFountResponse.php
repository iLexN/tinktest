<?php

namespace Tink\Helper\ResponseResult;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\NotFoundException;

/**
 * Class Response Result
 */
class NotFountResponse implements ResponseResultInterface
{
    /**
     * @var bool
     */
    private $status;

    private $msg;

    /**
     * @var ServerRequestInterface
     */
    private $request;

    /**
     * Response Result constructor.
     * @param bool $status
     * @param $msg
     * @param ServerRequestInterface $request
     */
    public function __construct(bool $status, $msg, ServerRequestInterface$request)
    {
        $this->status = $status;
        $this->msg = $msg;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function getStatus() : bool
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->msg;
    }

    /**
     * NotFound
     * @param ResponseInterface $response
     * @return ResponseInterface
     * @throws \Slim\Exception\NotFoundException
     */
    public function getResponse(ResponseInterface $response) : ResponseInterface
    {
        throw new NotFoundException($this->request, $response);
    }
}
