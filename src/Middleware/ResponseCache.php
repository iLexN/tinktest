<?php

namespace Tink\Middleware;

use PSR\Cache\CacheItemInterface;
use Psr\Container\ContainerInterface as Container;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Stash\Pool;

/**
 * Cache Response.
 */
class ResponseCache
{
    protected $container;

    /**
     * @var Pool
     */
    protected $pool;

    /**
     * ResponseCache constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
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
        $method = $this->getMethod($request);

        $item = $this->pool->getItem('/Response'.$this->getCacheKey($request));

        if ($this->hasCache($method, $item)) {
            $responseArray = $item->get();
            $response->getBody()->write($responseArray[0]);
            $response = $response->withHeader('Content-type', $responseArray[1]);

            return $response;
        }

        /** @var ResponseInterface $response */
        $response = $next($request, $response);

        if ($this->needMakeCache($method, $item, $response)) {
            $item->set([( string)$response->getBody(),$response->getHeader('Content-type')]);
            $item->expiresAfter(3600/12);
            $this->pool->save($item);
        }

        return $response;
    }

    private function getMethod(ServerRequestInterface $request)
    {
        $route = $request->getAttribute('route');
        return ($route === null) ? [] : $route->getMethods();
    }

    private function needMakeCache(array $method, CacheItemInterface $item, ResponseInterface $response)
    {
        return !$this->hasCache($method, $item) && $response->getStatusCode() === 200;
    }

    /**
     * @param ServerRequestInterface $request
     * @return string
     */
    private function getCacheKey(ServerRequestInterface $request): string
    {
        $path = $request->getUri()->getPath();

        if ($path === '/') {
            return '/frontpage';
        }

        return $path;
    }

    /**
     * @param array $method
     * @param CacheItemInterface $item
     * @return bool
     */
    private function hasCache(array $method, CacheItemInterface $item): bool
    {
        return in_array("GET", $method) && $item->isHit();
    }
}
