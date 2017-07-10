<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Module\AccountModule;

class WithDraw
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return mixed
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $acInfo = $this->container['ac'];

        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());

        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        if ($args['action'] === 'withdraw' && !$acInfo->checkWithDraw($validator->data()['amount'])) {
            return $response->write(\json_encode(['status'=>'draw money more than balance']));
        }

        /** @var AccountModule $accountModule */
        $accountModule = $this->container['accountModule'];
        $accountModule->amountChange($validator->data(), $args['action'], $acInfo);

        return $response->write(\json_encode(['data'=>$acInfo->toArray(), 'status'=>'success']));
    }
}
