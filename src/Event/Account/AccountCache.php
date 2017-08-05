<?php

namespace Tink\Event\Account;

use League\Event\AbstractListener;
use League\Event\EventInterface;
use Psr\Container\ContainerInterface;
use Stash\Pool;
use Tink\Model\Account;

/**
 * Class AccountCache
 * @package Tink\Event\Account
 */
class AccountCache extends AbstractListener
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * AccountCache constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param EventInterface $event
     * @param Account|null $param
     */
    public function handle(EventInterface $event, Account $param = null)
    {
        /** @var Pool $pool */
        $pool = $this->container['pool'];
        $pool->deleteItem('/Account/' . $param->id);
    }
}
