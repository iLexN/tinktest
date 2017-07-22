<?php

namespace Tink\Command;

use Psr\Container\ContainerInterface;
use Stash\Pool;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CacheCommand
 * Clear Cache Response|Account|All
 * @package Tink\Command
 */
class CacheCommand extends Command
{
    const RESPONSE_CACHE = 'Response';
    const ACCOUNT_CACHE = 'Account';
    const MAINTENANCE_CACHE = 'Maintenance';

    /**
     * @var Pool
     */
    protected $pool;

    /**
     * CacheCommand constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct(null);
        $this->pool = $container['pool'];
    }

    protected function configure()
    {
        $this->setName("Cache:Clear")
            ->setDescription("Clear Cache")
            ->addArgument('Type', InputArgument::REQUIRED, 'Clear Cache Type');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $type = $input->getArgument('Type');

        switch ($type) {
            case self::RESPONSE_CACHE:
                $this->pool->deleteItem('/Response/');
                $output->writeln('Response Cache Clear');
                break;
            case self::ACCOUNT_CACHE:
                $this->pool->deleteItem('/Account/');
                $output->writeln('Account Cache Clear');
                break;
            case self::MAINTENANCE_CACHE:
                $this->pool->purge();
                $output->writeln('Cache Maintenance is Done');
                break;
            default:
                $this->pool->clear();
                $output->writeln('All Cache Clear');
                break;
        }
    }
}
