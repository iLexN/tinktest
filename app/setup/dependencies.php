<?php

$container = $app->getContainer();

// monolog
$container['logger'] = function (\Slim\Container $c) {
    $settings = $c->get('logConfig');
    $logger = new \Monolog\Logger($settings['name']);
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));

    return $logger;
};

$container['httpClient'] = function (\Slim\Container $c) {
    $settings = $c->get('apiConfig');

    return new \GuzzleHttp\Client([
            'base_uri'    => $settings['base_uri'],
            'http_errors' => false,
            'verify'      => \Composer\CaBundle\CaBundle::getSystemCaRootBundlePath(),
        ]);
};

$container['pool'] = function (\Slim\Container $c) {
    $settings = $c->get('dataCacheConfig');
    $driver = new \Stash\Driver\FileSystem($settings);
    return new \Stash\Pool($driver);
};

// rount handloer
$container['notFoundHandler'] = function (\Slim\Container $c) {
    return function (\Slim\Http\Request $request, \Slim\Http\Response  $response) use ($c) {
        $logInfo = [
            'method' => $request->getMethod(),
            'uri'    => (string) $request->getUri(),
        ];
        $c['logger']->info('404', $logInfo);

        return $response->write('404')->withStatus(404);
    };
};

$container['errorHandler'] = function (\Slim\Container $c) {
    return function (\Slim\Http\Request $request, \Slim\Http\Response $response, \Exception $exception) use ($c) {
        $c['logger']->error('e', (array) $exception);

        return $response->write($exception)->withStatus(500);
    };
};

$container['ownerModule'] = function (\Slim\Container $c) {
    return new \Tink\Module\OwnerModule($c);
};

$container['accountModule'] = function (\Slim\Container $c) {
    return new \Tink\Module\AccountModule($c);
};

$container['historyModule'] = function (\Slim\Container $c) {
    return new \Tink\Module\HistoryModule($c);
};

$container['buildTransfer'] = function (\Slim\Container $c) {
    return new \Tink\Module\Transfer\BuildTransfer($c);
};
