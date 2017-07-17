<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Helper\ResponseResult\JsonResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;
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
     * @return ResponseResultInterface
     */
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        /** @var Account $acInfo */
        $acInfo = $this->container['ac'];
        $out = ['data'=>$acInfo->toArray(), 'status'=>'success'];

        return new JsonResponse($out);
    }
}
