<?php

namespace Tink\Module;

use \Tink\Model\Owner;
use \Valitron\Validator;

/**
 * Description of UserModule.
 *
 * @author user
 */
class OwnerModule
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param int $id
     *
     * @return Owner
     */
    public function getOwnerInfo($id)
    {
        return Owner::where('id', $id)
                ->where('status', 'Active')
                ->first();
    }
}
