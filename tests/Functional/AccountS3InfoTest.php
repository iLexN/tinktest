<?php

namespace Tests\Functional;

class AccountS3InfoTest extends BaseTestCase
{
    public function testOpenAccount()
    {
        $response = $this->runApp('Get', '/account/2');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals('account name2', $result['data']['name']);
        $this->assertEquals(1000, $result['data']['balance']);
        $this->assertEquals(1, $result['data']['ower']);
    }

    public function testOpenAccountError()
    {
        $response = $this->runApp('Get', '/account/1');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('account not exists', $result['status']);
    }

    public function testOpenAccountError2()
    {
        $response = $this->runApp('Get', '/account/100000');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals('account not exists', $result['status']);
    }
}
