<?php

namespace Tink\Module\Widget\EachWidget;

use Psr\Container\ContainerInterface as Container;

class FrontPageWelcomeWidget
{
    /**
     * @var Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getWeightData() : array
    {
        return [
            'h1' => 'Welcome to Ilex Page',
            'body' => 'I like Coding, Coding and Coding'
        ];
    }
}
