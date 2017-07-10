<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Module\AcccountModule;

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

        $validator = $accountModule->validator((array) $request->getParsedBody());

        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        $ac = $accountModule->create($validator->data(), $this->container['owner']);
        $this->haveDeposit($accountModule, $validator->data(), $ac);

        return $response->write(\json_encode(['data'=>$ac->toArray(), 'status'=>'success']));
    }

    private function haveDeposit($accountModule, $data, $ac)
    {
        if (isset($data['amount'])) {
            /** @var AcccountModule $accountModule */
            $accountModule->amountChange($data, 'deposit', $ac);
        }
    }
}
