<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class Close extends AbstractController
{
    public function action(Request $request, array $args)
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];
        $acInfo = $this->container['ac'];
        $accountModule->close($acInfo);
        
        $out = ['status'=>'success'];

        return new ControllerResult(self::JSON_RESPONSE, $out);
    }
}
