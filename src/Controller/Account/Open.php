<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Helper\ResponseResult\JsonResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;
use Tink\Model\Account;
use Tink\Module\AccountModule;

//use Tink\Module\HistoryModule;

/**
 * Class Open route: POST /[ower_id]/account
 * @package Tink\Controller\Account
 */
class Open extends AbstractController
{
    /**
     * open account by ower
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ResponseResultInterface
     */
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];

        $validator = $accountModule->validator((array) $request->getParsedBody());

        if (!$validator->validate()) {
            return new JsonResponse($validator->errors());
        }

        /** todo add validator */
        /*
        if (!$this->haveDeposit($validator->data()) &&
            !$historyValidator = $this->validatorAmount($validator->data()))
        {
            return $response->write(\json_encode($historyValidator->errors()));
        }
        */

        $ac = $accountModule->create($validator->data(), $this->container['owner']);
        $this->haveDeposits($accountModule, $validator->data(), $ac);

        $out = ['data'=>$ac->toArray(), 'status'=>'success'];

        return new JsonResponse($out);
    }

    /**
     * do amount change
     * @param AccountModule $accountModule
     * @param array $data
     * @param Account $ac
     * @return void
     */
    private function haveDeposits($accountModule, $data, $ac)
    {
        if ($this->haveDeposit($data)) {
            /** @var AccountModule $accountModule */
            $accountModule->amountChange($data, 'deposit', $ac);
        }
    }


    //private function validatorAmount(array $data)
    //{
    //    /** @var HistoryModule $historyModule */
    //    $historyModule = $this->container['historyModule'];
    //    $validator = $historyModule->validator($data);
    //    return $validator;
    //}

    /**
     * check have amount input or not.
     * @param array $data
     * @return bool
     */
    private function haveDeposit(array $data): bool
    {
        return isset($data['amount']);
    }
}
