<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\CollrollerResult\ControllerResult;
use Tink\Controller\CollrollerResult\ControllerResultInterface;
use Tink\Model\Account;
use Tink\Module\AccountModule;
use Tink\Module\HistoryModule;

/**
 * Class WithDraw
 * @package Tink\Controller\Account
 */
class WithDraw extends AbstractController
{
    /**
     * with draw action
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ControllerResultInterface
     */
    public function action(ServerRequestInterface $request, array $args) : ControllerResultInterface
    {
        /** @var Account $acInfo */
        $acInfo = $this->container['ac'];

        /** @var HistoryModule $history */
        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());

        if (!$validator->validate()) {
            return new ControllerResult(false, $validator->errors());
        }

        if ($args['action'] === 'withdraw' && !$acInfo->checkWithDraw($validator->data()['amount'])) {
            return new ControllerResult(false, ['status'=>'draw money more than balance']);
        }

        /** @var AccountModule $accountModule */
        $accountModule = $this->container['accountModule'];
        $accountModule->amountChange($validator->data(), $args['action'], $acInfo);

        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];
        
        return new ControllerResult(true, $out);
    }
}
