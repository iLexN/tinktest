<?php

namespace Tests\Functional;

class AccountS6TransferSameOwnerTest extends BaseTestCase
{
    public $ac1Id;
    public $ac2Id;

    public function testTransfer()
    {
        $ar = ['name'   => 'account name1',
               'balance'=> '11000',
            ];
        $response = $this->runApp('POST', '/1/account', $ar);
        $result = \json_decode((string) $response->getBody(), 1);
        $this->ac1Id = $result['data']['id'];

        $ar = ['name'=>'account name2'];
        $response = $this->runApp('POST', '/1/account', $ar);
        $result = \json_decode((string) $response->getBody(), 1);
        $this->ac2Id = $result['data']['id'];

        $response = $this->runApp('POST', '/account/'.$this->ac1Id.'/transfer/'.$this->ac2Id, ['amount'=>1000]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals('account name1', $result['data']['name']);
        $this->assertEquals(10000, $result['data']['balance']);
        $this->assertEquals(1, $result['data']['ower']);
    }

    public function testTransferE1()
    {
        $response = $this->runApp('POST', '/account/3/transfer/4', ['amount'=>'10aa']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('Amount must be numeric', $result['amount'][0]);
    }

    public function testTransferE2()
    {
        $response = $this->runApp('POST', '/account/3/transfer/4', ['amount'=>'']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertContains('Amount is required', implode(',', $result['amount']));
    }

    public function testTransferE3()
    {
        $response = $this->runApp('POST', '/account/100000/transfer/4', ['amount'=>'']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('account not exists', $result['status']);
    }

    public function testTransferE4()
    {
        $response = $this->runApp('POST', '/account/3/transfer/10000', ['amount'=>'']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('transfer to account not exists', $result['status']);
    }

    public function testTransferLimit()
    {
        $response = $this->runApp('POST', '/account/3/transfer/4', ['amount'=>9900]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('over daily limit', $result['status']);
    }

    public function testTransferE5()
    {
        $this->runApp('POST', '/account/3/withdraw', ['amount'=>8000]);

        $response = $this->runApp('POST', '/account/3/transfer/4', ['amount'=>5000]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('not enough money to transfer', $result['status']);
    }
}
