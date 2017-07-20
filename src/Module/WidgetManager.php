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

    public function getWidget(Page $page, $request) : array
    {
        $global = new GlobalWidget($this->container, $request);
        $type = new ContentTypeWidget($this->container, $page , $request);
        return [
            'global' => $global->getWidget(),
            'type' => $type->getWidget(),
        ];
    }
}
