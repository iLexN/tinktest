<?php

namespace Tink\Middleware;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Helper\ResponseResult\JsonResponse;

/**
 * Description of Account Middleware.
 *
 * @author user
 */
class CheckAccount
{
    /** @var ContainerInterface  */
    public $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable $next
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        $route = $request->getAttribute('route');
        $arguments = $route->getArguments();

        $ac = $this->container['accountModule']->getAcInfo($arguments['id']);
        if ($ac === null) {
            $result = new JsonResponse(['status' => 'account not exists']);
            return $result->getResponse($response);
        }

        $this->container['ac'] = $ac;

        return $next($request, $response);
    }
}
