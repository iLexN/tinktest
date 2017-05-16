<?php

namespace Tests\Functional;

class AccountS5DepositTest extends BaseTestCase
{
    public function testOpenAccount()
    {
        $response = $this->runApp('POST', '/account/2/deposit', ['amount'=>100]);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals('account name2', $result['data']['name']);
        $this->assertEquals(900 + 100, $result['data']['balance']);
        $this->assertEquals(1, $result['data']['ower']);
    }

    public function testOpenAccountE2()
    {
        $response = $this->runApp('POST', '/account/2/deposit', ['amount'=>'10aa']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('Amount must be numeric', $result['amount'][0]);
    }

    public function testOpenAccountE3()
    {
        $response = $this->runApp('POST', '/account/2/deposit', ['amount'=>'']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertContains('Amount is required', implode(',', $result['amount']));
    }

    public function testOpenAccountE4()
    {
        $response = $this->runApp('POST', '/account/1000000/deposit', ['amount'=>'100']);

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('account not exists', $result['status']);
    }
}
