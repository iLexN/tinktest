<?php

namespace Tink\Module;

use Psr\Container\ContainerInterface as Container;
use Tink\Model\Owner;

/**
 * Owner Module - CURD for Owner table.
 *
 * @author user
 */
class OwnerModule
{
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
