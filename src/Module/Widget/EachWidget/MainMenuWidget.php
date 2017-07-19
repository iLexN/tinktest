<?php

namespace Tink\Module\Widget\EachWidget;

use Psr\Container\ContainerInterface as Container;
use Tink\Module\PageModule;

class MainMenuWidget
{
    /**
     * @var Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getWeightData() : array
    {
        $ids = [1,2];
        $fields = ['id','title','uri'];
        /** @var PageModule $pageModule */
        $pageModule = $this->container['pageModule'];
        $pages = $pageModule->getPageByID($ids, $fields)->keyBy('id');

        $out = [];
        $out[] = [
            'menu_name'=>'Home',
            'menu_info' => $pages[1],
        ];
        $out[] = [
            'menu_name'=>'Ilex N',
            'menu_info' => $pages[2],
        ];
        return $out;
    }
}
