<?php

namespace Tink\Module;

use Psr\Container\ContainerInterface;
use Tink\Model\Page;
use Tink\Module\Widget\ContentTypeWidget;
use Tink\Module\Widget\GlobalWidget;

class WidgetManager
{
    /**
     * @var ContainerInterface
     */
    public $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getWidgetByPage(Page $page, $request) : array
    {
        $global = new GlobalWidget($this->container, $page, $request);
        $type = new ContentTypeWidget($this->container, $page, $request);
        return [
            'global' => $global->getWidget(),
            'type' => $type->getWidget(),
        ];
    }
}
