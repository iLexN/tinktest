<?php

namespace Tink\Event;

use League\Event\ListenerAcceptorInterface;
use League\Event\ListenerProviderInterface;
use Psr\Container\ContainerInterface;
use Tink\Event\Account\AccountCache;
use Tink\Event\Account\AccountOpen;

/**
 * Class AccountListenerProvider
 * @package Tink\Event
 */
class AccountListenerProvider implements ListenerProviderInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * AccountListenerProvider constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Provide event
     *
     * @param ListenerAcceptorInterface $listenerAcceptor
     *
     * @return $this
     */
    public function provideListeners(ListenerAcceptorInterface $listenerAcceptor)
    {
        $listenerAcceptor->addListener('account.open', new AccountOpen($this->container));
        $listenerAcceptor->addListener('account.close', new AccountCache($this->container));
        $listenerAcceptor->addListener('account.amountChange', new AccountCache($this->container));

        return $this;
    }
}
