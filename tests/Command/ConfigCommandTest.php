<?php

namespace Tests\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tink\Command\ConfigCommand;

class ConfigCommandTest extends TestCase
{
    public function testPathNotExist()
    {
        $application = new Application();
        $application->add(new ConfigCommand());

        $command = $application->find('Config:Make');

        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command' => $command->getName(),
            'Path' => 'Sitepoint'
        ]);

        $this->assertRegExp('/Your config path not exist/', $commandTester->getDisplay());
    }

    public function testPathExist()
    {
        $path = __DIR__.'/../../config/default';

        $application = new Application();
        $application->add(new ConfigCommand());

        $command = $application->find('Config:Make');

        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command' => $command->getName(),
            'Path' => $path,
        ]);

        $this->assertRegExp('/Your config is: /', $commandTester->getDisplay());
    }
}
