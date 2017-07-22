<?php

namespace Tink\Module\Widget;

use Tink\Module\Widget\EachWidget\MainMenuWidget;
use Tink\Module\Widget\EachWidget\MyInfoWidget;

/**
 * Class GlobalWidget - define and get the global widge
 * @package Tink\Module\Widget
 */
class GlobalWidget extends AbstractWidget
{
    /**
     * all Goblal data define here
     * @return array
     */
    public function getWidget() : array
    {
        $info = new MyInfoWidget();
        return [
            'main_menu' => MainMenuWidget::getWeightData($this->container['pageModule']),
            'my_info' => $info->getWeightData()
        ];
    }
}
