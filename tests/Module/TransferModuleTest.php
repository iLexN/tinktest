<?php

namespace Tests\Module;

class TransferModuleTest extends \PHPUnit\Framework\TestCase
{
    protected $container;
    protected $ac1;
    protected $ac2;

    protected function setUp()
    {
        $settings = require __DIR__.'/../../config/db-config.php';
        require __DIR__.'/../../app/setup/db-setup.php';

        $container = new \Slim\Container();

        $container['ownerModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\OwnerModule($c);
        };

        $container['acccountModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\AcccountModule($c);
        };

        $container['historyModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\HistoryModule($c);
        };

        $container['httpClient'] = function (\Slim\Container $c) {
            $stub = $this->createMock(\Psr\Http\Message\ResponseInterface::class);
            $stub->method('getStatusCode')
                ->willReturn(200);
            $stub->method('getBody')
                ->willReturn('{"status": "success"}');

            $stub2 = $this->createMock(\GuzzleHttp\Client::class);
            $stub2->method('request')
             ->willReturn($stub);

            return $stub2;
        };

        $owner1 = $container['ownerModule']->getOwnerInfo(1);
        $owner2 = $container['ownerModule']->getOwnerInfo(2);

        $accountModule = $container['acccountModule'];
        $ac1 = $accountModule->create(['name'=>'owner 1'], $owner1);
        $ac2 = $accountModule->create(['name'=>'owner 2'], $owner2);

        $history = $container['historyModule'];
        $history->create(['amount'=>11000], 'deposit', $ac1);

        $this->container = $container;
        $this->ac1 = $ac1;
        $this->ac2 = $ac2;
    }

    public function testTransfer()
    {

        $transferModule = new \Tink\Module\Transfer\BuildTransfer($this->container);
        $t = $transferModule->create($this->ac1, $this->ac2, ['amount'=>1000]);
        $history = $this->container['historyModule'];
        $t->transfer($history);

        $this->assertInstanceOf('Tink\Module\Transfer\TransferOtherOwer', $t);
    }
}
