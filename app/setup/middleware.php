<?php

$checkOwner = new \Tink\Middleware\CheckOwner($container);
$checkAccount = new \Tink\Middleware\CheckAccount($container);

//Last In First Executed
$app->add(new \Tink\Middleware\AddJsonHeader($container));

if ($dbSetting['logging']) {
    $app->add(new \Tink\Middleware\DBLog($container, $capsule));
}