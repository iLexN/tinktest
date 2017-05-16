<?php

namespace Tink\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Description of CheckOwner.
 *
 * @author user
 */
class CheckAccount
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

        $ac = $this->container['acccountModule']->getAcInfo($arguments['id']);
        if ($ac === null) {
            return $response->write(\json_encode(['status'=>'account not exists']));
        }
        $this->container['ac'] = $ac;

        return $next($request, $response);
    }
}
