<?php

namespace Tink\Module\Widget;

use Psr\Container\ContainerInterface as Container;
use Tink\Model\Page;
use Tink\Module\Widget\EachWidget\FrontPageWelcomeWidget;

class ContentTypeWidget
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
        switch ($page->content_type) {
            case Page::TYPE_PAGE:
                return $this->getFrontPageWidget();

            case Page::TYPE_FRONTPAGE:
                return [];
            default:
                return [];
        }
    }

    private function getFrontPageWidget() : array
    {
        $frontWelcome = new FrontPageWelcomeWidget($this->container);
        return [
            'front_welcome' => $frontWelcome->getWeightData(),
        ];
    }
}
