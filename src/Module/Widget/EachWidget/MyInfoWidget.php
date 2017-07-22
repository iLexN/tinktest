<?php

namespace Tink\Module\Widget\EachWidget;

/**
 * Info Widget, no need di container
 * @package Tink\Module\Widget\EachWidget
 */
class MyInfoWidget
{
    public function getWeightData() : array
    {
        $out = [
            'title' => 'iLexN Info',
            'description' => 'I like Coding !!'
        ];
        return $out;
    }
}
