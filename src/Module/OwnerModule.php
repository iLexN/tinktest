<?php

namespace Tink\Module;

use Tink\Model\Owner;

/**
 * Owner Module - CURD for Owner table.
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
     * Get Owner info.
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
