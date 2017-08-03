<?php

namespace Tink\Controller\User;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Helper\ResponseResult\JsonResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;
use Tink\Module\UserManager;

class User extends AbstractController
{
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        /** @var UserManager $userManager */
        $userManager = $this->container['userManager'];
        $user = $userManager->findByID($args['id']);

        $out = [
            'user' => $user,
            'hasRole' => $user->hasRole('admin'),
            'hasPermission' => $user->hasPermission('api write'),
        ];

        return new JsonResponse($out);
    }
}
