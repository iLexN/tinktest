<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Module\AccountModule;
use Tink\Module\HistoryModule;

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
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];

        $validator = $accountModule->validator((array) $request->getParsedBody());

        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        if (!$this->haveDeposit($validator->data()) || !$historyValidator = $this->validatorAmount($validator->data())) {
            return $response->write(\json_encode($historyValidator->errors()));
        }

        $ac = $accountModule->create($validator->data(), $this->container['owner']);
        $this->haveDeposits($accountModule, $validator->data(), $ac);


        return $response->write(\json_encode(['data'=>$ac->toArray(), 'status'=>'success']));
    }

    /**
     * check have amount input or not.
     * @param array $data
     * @return bool
     */
    private function haveDeposit(array $data)
    {
        return isset($data['amount']);
    }

    /**
     * Validator for history
     * @param array $data
     * @return \Valitron\Validator
     */
    private function validatorAmount(array $data)
    {
        /** @var HistoryModule $historyModule */
        $historyModule = $this->container['historyModule'];
        $validator = $historyModule->validator($data);
        return $validator;
    }

    /**
     * add amount when have input.
     * @param $accountModule
     * @param $data
     * @param $ac
     */
    private function haveDeposits($accountModule, $data, $ac)
    {
        if ($this->haveDeposit($data)) {
            /** @var AccountModule $accountModule */
            $accountModule->amountChange($data, 'deposit', $ac);
        }
    }
}
