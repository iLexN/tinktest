<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;

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

    public function __invoke(Request $request, Response $response, array $args)
    {
        /* @var $acInfo \Tink\Model\Account */
        $acInfo = $this->container['ac'];

        /* @var $history \Tink\Module\HistoryModule */
        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());

        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        if ($args['action'] === 'withdraw' && !$acInfo->checkWithDraw($data['amount'])) {
            return $response->write(\json_encode(['status'=>'draw money more than balance']));
        }

        $history->create($validator->data(), $args['action'], $acInfo);

        return $response->write(\json_encode(['data'=>$acInfo->toArray(),'status'=>'success']));
    }
}
