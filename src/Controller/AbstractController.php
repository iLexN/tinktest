<?php

namespace Tink\Controller;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Helper\ResponseResult\ResponseResultInterface;

/**
 * Abstract Controller for ARD
 */
abstract class AbstractController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
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
     * @param array $args
     * @return ResponseResultInterface
     */
    abstract protected function action(ServerRequestInterface $request, array $args): ResponseResultInterface;
}
