<?php

namespace Tests\Helper;

use PHPUnit\Framework\TestCase;
use Slim\Http\Response;
use Tink\Helper\ResponseResult\RedirectResponse;

class TestRedirectResponse extends TestCase
{
    public function testRedirectResponse()
    {
        $response = new Response();
        
        $redirectResponse = new RedirectResponse(301, '/');

        $getResponse = $redirectResponse->getResponse($response);

        $this->assertEquals(301, $getResponse->getStatusCode());
        $this->assertEquals('/', $getResponse->getHeaderLine('Location'));
    }
}
