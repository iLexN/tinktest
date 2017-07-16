<?php

session_start();

$autoloader = require '../vendor/autoload.php';

date_default_timezone_set('Asia/Hong_Kong');

$settings = \json_decode(file_get_contents(__DIR__.'/../config/app-config.json'),true);

// app init
$app = new \Slim\App($settings);
$container = $app->getContainer();
// service setup
require __DIR__.'/../app/setup/dependencies.php';

//db setup
require __DIR__.'/../app/setup/db-setup.php';

//Middleware
require __DIR__.'/../app/setup/middleware.php';

require __DIR__.'/../app/route/route.php';

// Run!
$app->run();
