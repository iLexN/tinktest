<?php

namespace Tink\Module\Fields;

use Tink\Model\PageField;

/**
 * Class HtmlField - strip tage for html
 * @package Tink\Module\Fields
 */
class HtmlField implements FieldInterface
{
    /**
     * @var PageField
     */
    protected $field;

    /**
     * HtmlField constructor.
     * @param PageField $field
     */
    public function __construct(PageField $field)
    {
        $this->field = $field;
    }

    /**
     * strip_tags for html
     * @return PageField
     */
    public function processData(): PageField
    {
        $this->field['plan_text'] = \strip_tags($this->field->field_value);
        return $this->field;
    }
}
