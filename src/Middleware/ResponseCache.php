<?php

namespace Tink\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Stash\Pool;

/**
 * logs sql.
 */
class ResponseCache
{
    /**
     * @var \Slim\Container
     */
    protected $container;

    /**
     * @var Pool
     */
    protected $pool;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
        $this->pool = $container['pool'];
    }

    /**
     * logRoute app setting determineRouteBeforeAppMiddleware = true.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
     * @param \Psr\Http\Message\ResponseInterface      $response PSR7 response
     * @param callable                                 $next     Next middleware
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $route = $request->getAttribute('route');
        $method = $route->getMethods();
        
        //$item = $this->pool->getItem('Response/'.md5($request->getUri()));
        $item = $this->pool->getItem('Response'.$request->getUri()->getPath());
        
        if ($this->hasCache($method, $item)) {
            $string = $item->get();
            $response->getBody()->write($string);
            
            return $response;
        }
        
        $response = $next($request, $response);

        if (!$this->hasCache($method, $item)) {
            $item->set(( string)$response->getBody());
            $item->expiresAfter(3600/12);
            $this->pool->save($item);
        }

        return $response;
    }
    
    private function hasCache($method, $item)
    {
        return in_array("GET", $method) && $item->isHit();
    }
}
