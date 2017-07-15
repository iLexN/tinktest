<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\CollrollerResult\ControllerResult;
use Tink\Controller\CollrollerResult\ControllerResultInterface;
use Tink\Module\AccountModule;

/**
 * Class Close route : Delete /account/[id]
 * @package Tink\Controller\Account
 */
class Close extends AbstractController
{
    /**
     * Close Account
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ControllerResultInterface
     */
    public function action(ServerRequestInterface $request, array $args) : ControllerResultInterface
    {
        /** @var AccountModule $accountModule */
        $accountModule = $this->container['accountModule'];
        $acInfo = $this->container['ac'];
        $accountModule->close($acInfo);
        
        $out = ['status'=>'success'];

        return new ControllerResult(true, $out);
    }
}
