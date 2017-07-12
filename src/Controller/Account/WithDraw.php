<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Module\AccountModule;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class WithDraw extends AbstractController
{
    public function action(Request $request, array $args)
    {
        $acInfo = $this->container['ac'];

        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());

        if (!$validator->validate()) {
            return new ControllerResult(self::JSON_RESPONSE, $validator->errors());
        }

        if ($args['action'] === 'withdraw' && !$acInfo->checkWithDraw($validator->data()['amount'])) {
            return new ControllerResult(self::JSON_RESPONSE, ['status'=>'draw money more than balance']);
        }

        /** @var AccountModule $accountModule */
        $accountModule = $this->container['accountModule'];
        $accountModule->amountChange($validator->data(), $args['action'], $acInfo);

        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];
        
        return new ControllerResult(self::JSON_RESPONSE, $out);
    }
}
