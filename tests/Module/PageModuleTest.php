<?php

namespace Tests\Module;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Tink\Module\PageModule;

class PageModuleTest extends TestCase
{
    public function testGetPageByIdWidthFields()
    {
        $container = $this->createMock(ContainerInterface::class);
        $pageModule = new PageModule($container);
        
        $page = $pageModule->getPageByID('1');

        $expected = [
            'id' => 1,
            'title' => 'Front Page',
            'body' => 'This is the Front Page',
            'uri' => '/',
            'content_type' => 'FrontPage',
        ];

        $this->assertEquals($expected, $page->toArray());
    }
}
