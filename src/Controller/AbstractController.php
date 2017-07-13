<?php

namespace Tink\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\ControllerResultInterface;

/**
 * Abstract Controller for ARD
 */
abstract class AbstractController
{
    /**
     * @var \Slim\Container
     */
    protected $container;
    
    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }
    
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $result = $this->action($request, $args);

        return $result->getResponse($response);
    }
    
    /**
     * the action process the Request
     * @param ServerRequestInterface $request
     * @return ControllerResultInterface
     */
    abstract protected function action(ServerRequestInterface $request, array $args);
}
