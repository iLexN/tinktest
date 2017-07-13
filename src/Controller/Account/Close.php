<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class Close extends AbstractController
{
    public function action(ServerRequestInterface $request, array $args)
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];
        $acInfo = $this->container['ac'];
        $accountModule->close($acInfo);
        
        $out = ['status'=>'success'];

        return new ControllerResult(true, $out);
    }
}
