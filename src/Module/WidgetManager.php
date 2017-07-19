<?php

namespace Tink\Module;

use Psr\Container\ContainerInterface as Container;
use Tink\Model\Page;
use Tink\Module\Widget\ContentTypeWidget;
use Tink\Module\Widget\GlobalWidget;

class WidgetManager
{
    /**
     * @var Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getWidget(Page $page) : array
    {
        $global = new GlobalWidget($this->container);
        $type = new ContentTypeWidget($this->container);
        return [
            'global' => $global->getWidget(),
            'type' => $type->getWidget($page),
        ];
    }
}
