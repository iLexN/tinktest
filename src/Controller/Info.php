<?php

namespace Tink\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\CollrollerResult\Controller404Result;
use Tink\Controller\CollrollerResult\ControllerResultInterface;

class Info extends AbstractController
{
    /**
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ControllerResultInterface
     */
    public function action(ServerRequestInterface $request, array $args) : ControllerResultInterface
    {
        //todo: Find rount from db
        $out = ['data'=>'a','status'=>'success'];
        
        return new Controller404Result(true, $out, $request);
    }
}
