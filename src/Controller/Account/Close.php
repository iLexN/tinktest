<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;

class Close
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
        /* @var $accountModule \Tink\Module\AcccountModule */
        $accountModule = $this->container['acccountModule'];

        $acInfo = $this->container['ac'];

        $accountModule->close($acInfo);

        return $response->write(\json_encode(['status'=>'success']));
    }
}
