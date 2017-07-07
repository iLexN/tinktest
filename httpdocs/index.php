<?php

session_start();

$autoloader = require '../vendor/autoload.php';

date_default_timezone_set('Asia/Hong_Kong');

// get config
$conf = new Noodlehaus\Config(__DIR__.'/../config/live/');
$settings = $conf->all() ?: [];

if (file_exists(__DIR__.'/../config/dev/')) {
    $confDev = new Noodlehaus\Config(__DIR__.'/../config/dev/');
    $settings = array_merge($conf->all(), $confDev->all());
}

// app init
$app = new \Slim\App($settings);

// service setup
require __DIR__.'/../app/setup/dependencies.php';

//db setup
require __DIR__.'/../app/setup/db-setup.php';

//Middleware
require __DIR__.'/../app/setup/middleware.php';

require __DIR__.'/../app/route/route.php';

// Run!
$app->run();
