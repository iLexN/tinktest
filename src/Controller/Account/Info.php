<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class Info extends AbstractController
{
    public function action(ServerRequestInterface $request, array $args)
    {
        $acInfo = $this->container['ac'];
        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];
        
        return new ControllerResult(true, $out);
    }
}
