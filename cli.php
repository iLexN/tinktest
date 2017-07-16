<?php

use Symfony\Component\Console\Application;

require_once __DIR__ . '/vendor/autoload.php';

$settings = \json_decode(file_get_contents(__DIR__.'/config/app-config.json'),true);
$app = new \Slim\App($settings);

$container = $app->getContainer();
require __DIR__.'/app/setup/dependencies.php';


$app = new Application();

$app->add(new Tink\Command\ConfigCommand());

$app->add(new Tink\Command\CacheCommand($container));

$app->run();
