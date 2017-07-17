<?php

namespace Tink\Module;

use Slim\Container;
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

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Get Owner info.
     * @param int $id
     *
     * @return Owner|null
     */
    public function getOwnerInfo($id)
    {
        return Owner::where('id', $id)
                ->where('status', 'Active')
                ->first();
    }
}
