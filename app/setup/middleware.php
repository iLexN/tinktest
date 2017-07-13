<?php

$checkOwner = new \Tink\Middleware\CheckOwner($container);
$checkAccount = new \Tink\Middleware\CheckAccount($container);

//Last In First Executed

if ($dbSetting['logging']) {
    $app->add(new \Tink\Middleware\DBLog($container, $capsule));
}

$app->add(new \Tink\Middleware\ResponseCache($container));
//$app->add(new \Tink\Middleware\AddJsonHeader($container));
