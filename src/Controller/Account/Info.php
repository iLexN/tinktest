<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\CollrollerResult\ControllerResult;
use Tink\Controller\CollrollerResult\ControllerResultInterface;
use Tink\Model\Account;

/**
 * Get Account route: GET /account/[id]
 * @package Tink\Controller\Account
 */
class Info extends AbstractController
{
    /**
     * Get Account Info
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ControllerResultInterface
     */
    public function action(ServerRequestInterface $request, array $args) : ControllerResultInterface
    {
        /** @var Account $acInfo */
        $acInfo = $this->container['ac'];
        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];
        
        return new ControllerResult(true, $out);
    }
}
