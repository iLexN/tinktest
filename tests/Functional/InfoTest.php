<?php
/**
 * Created by PhpStorm.
 * User: IlexN
 * Date: 22/7/2017
 * Time: 15:46
 */

namespace Tests\Functional;

class InfoTest extends BaseTestCase
{
    public function testFrontPage()
    {
        $response = $this->runApp('GET', '/');
        $result = \json_decode((string) $response->getBody(), 1);

        $expected = [
            'pageInfo' => [
                'id' => 1,
                'title' => 'Front Page',
                'body' => 'This is the Front Page',
                'uri' => '/',
                'content_type' => 'FrontPage',
            ],
            'pageField' => [
                'Description' => [ 0 =>[
                    'id' => 1,
                    'page_id' => 1,
                    'field_name' => 'Description',
                    'field_value' => 'This is The Description',
                    'field_type' => 'PlanText',
                ]],
            ]
        ];

        $this->assertEquals($expected['pageInfo'], $result['pageInfo']);
        $this->assertEquals($expected['pageField']['Description'], $result['pageField']['Description']);
    }

    public function testAbout()
    {
        $response = $this->runApp('GET', '/ilexn');
        $result = \json_decode((string) $response->getBody(), 1);

        $expected = [
            'pageInfo' => [
                'id' => 2,
                'title' => 'About Us',
                'body' => 'I am iLexN !',
                'uri' => '/ilexn',
                'content_type' => 'Page',
            ],
            'widget' => [
                'type' => [
                    'contact_me' => [
                        'h1' => 'Contact Me',
                        'email' => 'ilex.ng@scmp.com',
                        'tel' => '6629 0711',
                    ],
                ],
            ],
        ];

        $this->assertEquals($expected['pageInfo'], $result['pageInfo']);
        $this->assertEquals($expected['widget']['type'], $result['widget']['type']);
    }
}
