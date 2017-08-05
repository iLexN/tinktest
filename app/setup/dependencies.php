<?php

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
        return $response->write('404')->withStatus(404);
    };
};

$container['errorHandler'] = function (\Slim\Container $c) {
    return function (\Slim\Http\Request $request, \Slim\Http\Response $response, \Exception $exception) use ($c) {
        $c['logger']->error('e', (array) $exception);

        return $response->write($exception)->withStatus(500);
    };
};

$container['phpErrorHandler'] = function (\Slim\Container $c) {
    return function (\Slim\Http\Request $request, \Slim\Http\Response $response, $error) use ($c) {
        $c['logger']->error('e', (array) $error);

        return $c['response']
            ->withStatus(500)
            ->write(print_r($error, 1));
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

$container['pageModule'] = function (\Slim\Container $c) {
    return new \Tink\Module\PageModule($c);
};

$container['widgetManager'] = function (\Slim\Container $c) {
    return new \Tink\Module\WidgetManager($c);
};

$container['fieldsManager'] = function (\Slim\Container $c) {
    return new \Tink\Module\Fields\FieldsManager($c);
};

$container['userManager'] = function (\Slim\Container $c) {
    return new \Tink\Module\UserManager($c);
};

$container['eventEmitter'] = function (\Slim\Container $c) {
    $emitter = new \League\Event\Emitter;
    $emitter->useListenerProvider(new \Tink\Event\AccountListenerProvider($c));

    return $emitter;
};
