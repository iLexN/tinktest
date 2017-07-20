<?php

namespace Tink\Module\Widget\EachWidget;

/**
 * For content type = FrontPage
 * @package Tink\Module\Widget\EachWidget
 */
class FrontPageWelcomeWidget
{
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getWeightData() : array
    {
        return [
            'h1' => 'Welcome to Ilex Page',
            'body' => 'I like Coding, Coding and Coding'
        ];
    }
}
