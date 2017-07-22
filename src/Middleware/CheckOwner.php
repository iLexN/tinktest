<?php

namespace Tink\Middleware;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Helper\ResponseResult\JsonResponse;

/**
 * Description of CheckOwner.
 */
class CheckOwner
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

        $owner = $this->container['ownerModule']->getOwnerInfo($arguments['owner']);
        if ($owner === null) {
            $result = new JsonResponse(['status' => 'owner not exists']);
            return $result->getResponse($response);
        }

        $this->container['owner'] = $owner;

        return $next($request, $response);
    }
}
