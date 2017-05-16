<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;

class Open
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

        $validator = $accountModule->validator((array)$request->getParsedBody());

        //todo : add name check , add history

        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        $ac = $accountModule->create($validator->data(), $this->container['owner']);

        return $response->write(\json_encode(['data'=>$ac->toArray(),'status'=>'success']));
    }
}
