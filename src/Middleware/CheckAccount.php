<?php

namespace Tink\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Container;
use Tink\Helper\ResponseResult\JsonResponse;

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

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $route = $request->getAttribute('route');
        $arguments = $route->getArguments();

        $ac = $this->container['accountModule']->getAcInfo($arguments['id']);
        if ($ac === null) {
            $result = new JsonResponse(\false, ['status' => 'account not exists']);
            return $result->getResponse($response);
        }

        $this->container['ac'] = $ac;

        return $next($request, $response);
    }
}
