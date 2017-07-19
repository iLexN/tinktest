<?php

namespace Tink\Module\Widget\EachWidget;

use Psr\Container\ContainerInterface as Container;

class MyInfoWidget
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
        $out = [
            'title' => 'iLexN Info',
            'description' => 'I like Coding !!'
        ];
        return $out;
    }
}
