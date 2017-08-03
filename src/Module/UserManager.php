<?php

namespace Tink\Module;

use Psr\Container\ContainerInterface;
use Tink\Model\User;

class UserManager
{
    public $container;

    /**
     * UserManager constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $id
     * @return User
     */
    public function findByID($id) : User
    {
        $user = User::find($id);
        return $user;
    }
}
