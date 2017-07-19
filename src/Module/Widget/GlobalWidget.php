<?php

namespace Tink\Module\Widget;

use Psr\Container\ContainerInterface as Container;
use Tink\Module\Widget\EachWidget\MainMenuWidget;
use Tink\Module\Widget\EachWidget\MyInfoWidget;

class GlobalWidget
{
    /**
     * @var Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getWidget() : array
    {
        $mainMenu = new MainMenuWidget($this->container);
        $info = new MyInfoWidget($this->container);
        return [
            'main_menu' => $mainMenu->getWeightData(),
            'my_info' => $info->getWeightData()
        ];
    }
}
