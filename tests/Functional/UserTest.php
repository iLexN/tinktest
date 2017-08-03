<?php

namespace Tests\Functional;

class UserTest extends BaseTestCase
{
    public function testAc1()
    {
        $expected = [
            'user' => [
                'id' => 1,
                'email' => 'user1@user1.com',
                'role' => [
                    'id' => 1,
                    'name' => 'admin',
                    'permission' => [
                        [
                            'id' => 2,
                            'name' => 'api read',
                        ],
                        [
                            'id' => 1,
                            'name' => 'api write',
                        ],
                    ],
                ],
            ],
            'hasRole' => true,
            'hasPermission' => true,
        ];
        $response = $this->runApp('Get', '/user/1');
        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals($expected, $result);
    }

    public function testAc2()
    {
        $expected = [
            'user' => [
                'id' => 2,
                'email' => 'user2@user2.com',
                'role' => [
                    'id' => 2,
                    'name' => 'member',
                    'permission' => [
                        [
                            'id' => 2,
                            'name' => 'api read',
                        ],
                    ],
                ],
            ],
            'hasRole' => false,
            'hasPermission' => false,
        ];
        $response = $this->runApp('Get', '/user/2');
        $this->assertEquals(200, $response->getStatusCode());
        $result = \json_decode((string) $response->getBody(), 1);
        $this->assertEquals($expected, $result);
    }
}
