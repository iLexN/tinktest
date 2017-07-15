<?php

namespace Tink\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Helper\ResponseResult\NotFountResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;

class Info extends AbstractController
{
    /**
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ResponseResultInterface
     */
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        //todo: Find rount from db
        $out = ['data'=>'a','status'=>'success'];

        return new NotFountResponse(true, $out, $request);
    }
}
