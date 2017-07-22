<?php

namespace Tink\Module\Fields;

use Tink\Model\PageField;
use Tink\Module\PageModule;

/**
 * Class InterLinkField
 * @package Tink\Module\Fields
 */
class InterLinkField implements FieldInterface
{
    protected $field;

    protected $pageModule;

    /**
     * InterLinkField constructor.
     * @param PageField $field
     * @param PageModule $pageModule
     */
    public function __construct(PageField $field, PageModule $pageModule)
    {
        $this->field = $field;
        $this->pageModule = $pageModule;
    }

    /**
     * get Page uri
     * @return PageField
     */
    public function processData() : PageField
    {
        $page = $this->pageModule->getPageByID($this->field['field_value'], ['uri']);
        $this->field['link'] = $page->uri;
        return $this->field;
    }
}
