<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Helper\ResponseResult\JsonResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;
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
     * @return ResponseResultInterface
     */
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        /** @var AccountModule $accountModule */
        $accountModule = $this->container['accountModule'];
        $acInfo = $this->container['ac'];
        $accountModule->close($acInfo);
        
        $out = ['status'=>'success'];

        return new JsonResponse($out);
    }
}
