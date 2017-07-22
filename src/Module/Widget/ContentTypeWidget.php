<?php

namespace Tink\Module\Widget;

use Tink\Model\Page;
use Tink\Module\Widget\EachWidget\ContactWidget;
use Tink\Module\Widget\EachWidget\FrontPageWelcomeWidget;

/**
 * Class ContentTypeWidget
 * @package Tink\Module\Widget
 */
class ContentTypeWidget extends AbstractWidget
{
    /**
     * @return array
     */
    public function getWidget() : array
    {
        switch ($this->page->content_type) {
            case Page::TYPE_PAGE:
                return $this->getPageWidget();
            case Page::TYPE_FRONTPAGE:
                return $this->getFrontPageWidget();
            default:
                return [];
        }
    }

    /**
     * All Front Page Widget
     * @return array
     */
    private function getFrontPageWidget() : array
    {
        $frontWelcome = new FrontPageWelcomeWidget();
        return [
            'front_welcome' => $frontWelcome->getWeightData(),
        ];
    }

    /**
     * All type = Page
     * @return array
     */
    private function getPageWidget() : array
    {
        return [
            'contact_me' => ContactWidget::getWeightData(),
        ];
    }
}
