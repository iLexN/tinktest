<?php

use Crunz\Console\Command\ClosureRunCommand;
use Crunz\Console\Command\ScheduleListCommand;
use Crunz\Console\Command\ScheduleRunCommand;
use Crunz\Console\Command\TaskGeneratorCommand;
use Phinx\Console\Command\Breakpoint;
use Phinx\Console\Command\Create;
use Phinx\Console\Command\Migrate;
use Phinx\Console\Command\Rollback;
use Phinx\Console\Command\SeedCreate;
use Phinx\Console\Command\SeedRun;
use Phinx\Console\Command\Status;
use Symfony\Component\Console\Application;
use Tink\Command\ConfigCommand;

require_once __DIR__ . '/vendor/autoload.php';

$settings = \json_decode(file_get_contents(__DIR__.'/config/app-config.json'), true);
$app = new \Slim\App($settings);

$container = $app->getContainer();
require __DIR__.'/app/setup/dependencies.php';

$app = new Application();

$app->add(new Tink\Command\ConfigCommand());
$app->add(new Tink\Command\CacheCommand($container));

//Phinx Command
$app->add((new Create())->setName('Phinx:create'));
$app->add((new Migrate())->setName('Phinx:migrate'));
$app->add((new Rollback())->setName('Phinx:rollback'));
$app->add((new Status)->setName('Phinx:status'));
$app->add((new Breakpoint())->setName('Phinx:breakpoint'));
$app->add(new SeedCreate());
$app->add(new SeedRun());

//Schedule Crunz
$app->add(new ScheduleRunCommand);
$app->add(new ScheduleListCommand);
$app->add(new TaskGeneratorCommand);
$app->add(new ConfigCommand);
$app->add(new ClosureRunCommand);

$app->run();
