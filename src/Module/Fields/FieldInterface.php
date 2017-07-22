<?php

namespace Tink\Module\Fields;

use Tink\Model\PageField;

/**
 * Interface FieldInterface
 * @package Tink\Module\Fields
 */
interface FieldInterface
{
    /**
     * alter data
     * @return PageField
     */
    public function processData() : PageField;
}
