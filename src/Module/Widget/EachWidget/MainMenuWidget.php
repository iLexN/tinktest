<?php

namespace Tink\Module\Widget\EachWidget;

use Tink\Module\PageModule;

/**
 * Main Menu Widget for global
 * @package Tink\Module\Widget\EachWidget
 */
class MainMenuWidget
{
    public static function getWeightData(PageModule $pageModule) : array
    {
        $ids = [1,2];
        $fields = ['id','title','uri'];
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
