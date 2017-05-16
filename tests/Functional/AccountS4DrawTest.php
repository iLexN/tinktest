<?php

namespace Tests\Functional;

class AccountS4DrawTest extends BaseTestCase
{
    public function testOpenAccount()
    {
        $response = $this->runApp('POST', '/account/2/withdraw', ['amount'=>100]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals('account name2', $result['data']['name']);
        $this->assertEquals(1000 - 100, $result['data']['balance']);
        $this->assertEquals(1, $result['data']['ower']);
    }

    public function testOpenAccountE1()
    {
        $response = $this->runApp('POST', '/account/2/withdraw', ['amount'=>100000]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('draw money more than balance', $result['status']);
    }

    public function testOpenAccountE2()
    {
        $response = $this->runApp('POST', '/account/2/withdraw', ['amount'=>'10aa']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('Amount must be numeric', $result['amount'][0]);
    }

    public function testOpenAccountE3()
    {
        $response = $this->runApp('POST', '/account/2/withdraw', ['amount'=>'']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertContains('Amount is required', implode(',', $result['amount']));
    }

    public function testOpenAccountE4()
    {
        $response = $this->runApp('POST', '/account/1000000/withdraw', ['amount'=>'100']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('account not exists', $result['status']);
    }
}
