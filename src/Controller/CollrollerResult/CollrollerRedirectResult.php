<?php

namespace Tink\Controller\CollrollerResult;

use Psr\Http\Message\ResponseInterface;

/**
 * Class CollrollerRedirectResult
 * @package Tink\Controller\CollrollerResult
 */
class CollrollerRedirectResult implements ControllerResultInterface
{
    /**
     * @var bool
     */
    private $status;

    /**
     * @var string
     */
    private $msg;

    /**
     * CollrollerRedirectResult constructor.
     * @param bool $status
     * @param string $msg redirect path
     */
    public function __construct(bool $status, $msg)
    {
        $this->status = $status;
        $this->msg = $msg;
    }

    /**
     * get the response status
     * @return bool
     */
    public function getStatus(): bool
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
     * 301 Redirect with path
     * Proccess the Response
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function getResponse(ResponseInterface $response): ResponseInterface
    {
        return $response->withStatus(301)->withHeader('Location', $this->msg);
    }
}
