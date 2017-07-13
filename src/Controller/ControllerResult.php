<?php

namespace Tink\Controller;

use Psr\Http\Message\ResponseInterface;
use Tink\Controller\ControllerResultInterface;

/**
 * Class Response Result
 */
class ControllerResult implements ControllerResultInterface
{
    /**
     * @var bool
     */
    private $status;

    private $msg;

    /**
     * Response Result constructor.
     * @param bool $status
     * @param string $msg
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

    public function getOutput()
    {
        return $this->msg;
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
}
