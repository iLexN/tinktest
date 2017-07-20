<?php

namespace Tink\Module\Widget;

use Psr\Container\ContainerInterface as Container;
use Tink\Model\Page;
use Tink\Module\Widget\EachWidget\FrontPageWelcomeWidget;

/**
 * Class ContentTypeWidget
 * @package Tink\Module\Widget
 */
class ContentTypeWidget
{
    /**
     * @var Container
     */
    public $container;

    public $page;

    protected $request;

    public function __construct(Container $container, Page $page , $request)
    {
        $this->container = $container;
        $this->page = $page;
        $this->request = $request;
    }

    public function getWidget() : array
    {
        switch ($this->page->content_type) {
            case Page::TYPE_PAGE:
                return [];
            case Page::TYPE_FRONTPAGE:
                return $this->getFrontPageWidget();
            default:
                return [];
        }
    }

    private function getFrontPageWidget() : array
    {
        $frontWelcome = new FrontPageWelcomeWidget();
        return [
            'front_welcome' => $frontWelcome->getWeightData(),
        ];
    }
}
