<?php

namespace Tink\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Description of CheckOwner
 *
 * @author user
 */
class CheckOwner
{

    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, $next)
    {
        $route = $request->getAttribute('route');
        $arguments = $route->getArguments();

        $owner = $this->container['ownerModule']->getOwnerInfo($arguments['owner']);
        if ($owner === null) {
            return $response->write(\json_encode(['status'=>'owner not exists']));
        }

        $this->container['owner'] = $owner;

        return $next($request, $response);
    }
}
