<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;

class Info
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $acInfo = $this->container['ac'];

        return $response->write(\json_encode(['data'=>$acInfo->toArray(),'status'=>'success']));
    }
}
