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
     * add cache for response, app setting determineRouteBeforeAppMiddleware = true.
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

        $method = $route === null ? [] : $route->getMethods();

        $item = $this->pool->getItem('Response'.$this->getCacheKey($request));
        
        if ($this->hasCache($method, $item)) {
            $string = $item->get();
            $response->getBody()->write($string);
            
            return $response;
        }
        
        $response = $next($request, $response);

        //var_dump($response->getStatusCode());
        
        if (!$this->hasCache($method, $item) && $response->getStatusCode() === 200) {
            $item->set(( string)$response->getBody());
            $item->expiresAfter(3600/12);
            $this->pool->save($item);
        }

        return $response;
    }

    /**
     * @param ServerRequestInterface $request
     * @return string
     */
    private function getCacheKey(ServerRequestInterface $request): string
    {
        $path = $request->getUri()->getPath();
        
        if ($path === '/') {
            return 'frontpage';
        }
        
        return $path;
    }

    /**
     * @param array $method
     * @param $item
     * @return bool
     */
    private function hasCache(array $method, $item): bool
    {
        return in_array("GET", $method) && $item->isHit();
    }
}
