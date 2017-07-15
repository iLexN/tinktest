<?php

namespace Tink\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Container;
use Tink\Controller\CollrollerResult\ControllerResult;

/**
 * Description of CheckOwner.
 *
 * @author user
 */
class CheckOwner
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $route = $request->getAttribute('route');
        $arguments = $route->getArguments();

        $owner = $this->container['ownerModule']->getOwnerInfo($arguments['owner']);
        if ($owner === null) {
            $result = new ControllerResult(false, ['status'=>'owner not exists']);
            return $result->getResponse($response);
        }

        $this->container['owner'] = $owner;

        return $next($request, $response);
    }
}
