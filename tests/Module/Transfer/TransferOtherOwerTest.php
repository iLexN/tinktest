<?php

namespace Tests\Module\Transfer;

use PHPUnit\Framework\TestCase;
use Tink\Module\AccountModule;
use Tink\Module\Transfer\Rule\RuleApiApprove;
use Tink\Module\Transfer\Rule\RuleDailyLimit;
use Tink\Module\Transfer\Rule\RuleWithDrawAmountExtraCharge;
use Tink\Module\Transfer\TransferOtherOwner;

class TransferOtherOwerTest extends TestCase
{
    protected $container;
    protected $ac1;
    protected $ac2;

    public function testTransfer()
    {
        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=> 1000],
            []
        );

        $transfer->transfer($this->container['acccountModule']);

        $this->assertEquals(9900, $this->ac1->balance);
        $this->assertEquals(1000, $this->ac2->balance);
    }

    public function testCanTransfer()
    {
        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>1000],
            []
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(true, $ar->getStatus());
        $this->assertEquals('can transfer', $ar->getMsg());
    }

    public function testCanTransferE1()
    {
        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>20000],
            [
                new RuleWithDrawAmountExtraCharge($this->ac1, ['amount'=>20000]),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(false, $ar->getStatus());
        $this->assertEquals('not enough money to transfer', $ar->getMsg());
    }

    public function testCanTransferWithDrawSuccess()
    {
        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>500],
            [
                new RuleWithDrawAmountExtraCharge($this->ac1, ['amount'=>500]),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(true, $ar->getStatus());
        $this->assertEquals('can transfer', $ar->getMsg());
    }

    public function testCanTransferE2()
    {
        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>10001],
            [
                new RuleDailyLimit($this->ac1, ['amount'=>10001]),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(false, $ar->getStatus());
        $this->assertEquals('over daily limit', $ar->getMsg());
    }

    public function testCanTransferE3()
    {
        $this->container['httpClient'] = function () {
            $stub = $this->createMock(\Psr\Http\Message\ResponseInterface::class);
            $stub->method('getStatusCode')
                ->willReturn(404);
            $stub->method('getBody')
                ->willReturn('{"status": "success"}');

            $stub2 = $this->createMock(\GuzzleHttp\Client::class);
            $stub2->method('request')
             ->willReturn($stub);

            return $stub2;
        };

        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>500],
            [
                new RuleApiApprove($this->container),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(false, $ar->getStatus());
        $this->assertEquals('not approve', $ar->getMsg());
    }

    public function testCanTransferE4()
    {
        $this->container['httpClient'] = function (\Slim\Container $c) {
            $stub = $this->createMock(\Psr\Http\Message\ResponseInterface::class);
            $stub->method('getStatusCode')
                ->willReturn(200);
            $stub->method('getBody')
                ->willReturn('{"status": "fail"}');

            $stub2 = $this->createMock(\GuzzleHttp\Client::class);
            $stub2->method('request')
             ->willReturn($stub);

            return $stub2;
        };

        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>500],
            [
                new RuleApiApprove($this->container),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(false, $ar->getStatus());
        $this->assertEquals('not approve', $ar->getMsg());
    }

    public function testCanTransferApiSuccess()
    {
        $this->container['httpClient'] = function (\Slim\Container $c) {
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

        $transfer = new TransferOtherOwner(
            $this->container,
            $this->ac1,
            $this->ac2,
            ['amount'=>1000],
            [
                new RuleApiApprove($this->container),
            ]
        );
        $ar = $transfer->canTransfer();

        $this->assertEquals(true, $ar->getStatus());
        $this->assertEquals('can transfer', $ar->getMsg());
    }

    protected function setUp()
    {
        $settings = require __DIR__ . '/../../../config/default/db-config.php';
        require __DIR__ . '/../../../app/setup/db-setup.php';

        $container = new \Slim\Container();

        $container['ownerModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\OwnerModule($c);
        };

        $container['acccountModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\AccountModule($c);
        };

        $container['historyModule'] = function (\Slim\Container $c) {
            return new \Tink\Module\HistoryModule($c);
        };

        $container['eventEmitter'] = function (\Slim\Container $c) {
            $emitter = new \League\Event\Emitter;
            $emitter->addListener('account.open', new \Tink\Event\Account\AccountOpen($c));
            return $emitter;
        };

        $container['pool'] = function (\Slim\Container $c) {
            $driver = new \Stash\Driver\FileSystem();
            return new \Stash\Pool($driver);
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

        /** @var AccountModule $accountModule */
        $accountModule = $container['acccountModule'];
        $ac1 = $accountModule->create(['name' => 'owner 1'], $owner1);
        $ac2 = $accountModule->create(['name' => 'owner 2'], $owner2);

        //$history = $container['historyModule'];
        $accountModule->amountChange(['amount' => 11000], 'deposit', $ac1);

        $this->container = $container;
        $this->ac1 = $ac1;
        $this->ac2 = $ac2;
    }
}
