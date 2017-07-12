<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class Info extends AbstractController
{
    public function action(Request $request, array $args)
    {
        $acInfo = $this->container['ac'];
        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];
        
        return new ControllerResult(self::JSON_RESPONSE, $out);
    }
}
