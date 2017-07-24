<?php

namespace Tests\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tink\Command\CacheCommand;

class CacheCommandTest extends TestCase
{
    protected $tester;

    protected function setUp()
    {
        $container = new \Slim\Container();
        $container['pool'] = function (\Slim\Container $c) {
            $driver = new \Stash\Driver\FileSystem();
            return new \Stash\Pool($driver);
        };

        $application = new Application();
        $application->add(new CacheCommand($container));

        $command = $application->find('Cache:Clear');
        $this->tester = new CommandTester($command);
    }

    public function testClearAll()
    {
        $this->tester->execute([
            'command' => 'Cache:Clear',
            'Type' => 'ClearAll'
        ]);

        $this->assertContains('All Cache Clear', $this->tester->getDisplay());
    }

    public function testClearResponse()
    {
        $this->tester->execute([
            'command' => 'Cache:Clear',
            'Type' => 'Response'
        ]);

        $this->assertContains('Response Cache Clear', $this->tester->getDisplay());
    }

    public function testClearAccount()
    {
        $this->tester->execute([
            'command' => 'Cache:Clear',
            'Type' => 'Account'
        ]);

        $this->assertContains('Account Cache Clear', $this->tester->getDisplay());
    }

    public function testCacheMaintenance()
    {
        $this->tester->execute([
            'command' => 'Cache:Clear',
            'Type' => 'Maintenance'
        ]);

        $this->assertContains('Cache Maintenance is Done', $this->tester->getDisplay());
    }
}
