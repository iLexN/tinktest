<?php

namespace Tink\Event\Account;

use League\Event\AbstractListener;
use League\Event\EventInterface;
use Psr\Container\ContainerInterface;
use Tink\Model\Account;

/**
 * Class AccountOpen
 * @package Tink\Event\Listener
 */
class AccountOpen extends AbstractListener
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * AccountOpen constructor.
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
        // Handle the event.
        //$this->container['logger']->info('Evnet account param',$param->toArray());
        //$this->container['logger']->info('Evnet name', [$event->getName()]);
    }
}
