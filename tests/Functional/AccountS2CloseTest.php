<?php

namespace Tests\Functional;

class AccountS2CloseTest extends BaseTestCase
{

    public function testCloseAccount()
    {
        $response = $this->runApp('DELETE', '/account/1');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string)$response->getBody(),1);
        $this->assertEquals('success', $result['status']);
    }

    public function testCloseAccountError()
    {
        $response = $this->runApp('DELETE', '/account/1');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string)$response->getBody(),1);
        $this->assertEquals('account not exists', $result['status']);
    }

    public function testCloseAccountError2()
    {
        $response = $this->runApp('DELETE', '/account/1000000');

        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string)$response->getBody(),1);
        $this->assertEquals('account not exists', $result['status']);
    }

}