<?php

$dbSetting = $settings['dbConfig'];

$db = [
        'driver'    => 'mysql',
        'host'      => $dbSetting['host'],
        'database'  => $dbSetting['database'],
        'username'  => $dbSetting['user'],
        'password'  => $dbSetting['password'],
        'charset'   => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix'    => '',
    ];
$capsule = new \Illuminate\Database\Capsule\Manager();
$capsule->addConnection($db);
$capsule->setAsGlobal();
$capsule->bootEloquent();

if ($dbSetting['logging']) {
    $capsule->getConnection()->enableQueryLog();
}
