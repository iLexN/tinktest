<?php

namespace Tink\Controller\Account;

use Tink\Module\AccountModule;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;
use Psr\Http\Message\ServerRequestInterface;

class WithDraw extends AbstractController
{
    public function action(ServerRequestInterface $request, array $args)
    {
        $acInfo = $this->container['ac'];

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
