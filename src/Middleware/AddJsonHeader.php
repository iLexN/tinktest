<?php

namespace Tink\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * check the url part with the id is client or not.
 *
 * @author user
 */
class AddJsonHeader
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
        $response = $response->withHeader('Content-type', 'application/json');

        return $next($request, $response);
    }
}
