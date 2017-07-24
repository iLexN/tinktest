<?php

namespace Tink\Module\Fields;

use Illuminate\Database\Eloquent\Collection;
use Psr\Container\ContainerInterface;
use Tink\Model\PageField;

/**
 * Class FieldsManager - process each Field
 * @package Tink\Module\Fields
 */
class FieldsManager
{
    /** @var ContainerInterface  */
    protected $container;

    /** @var  Collection */
    private $fields;

    /**
     * FieldsManager constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param Collection $fields
     * @return $this
     */
    public function setFields(Collection $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * return all fields
     * @return Collection
     */
    public function getFields()
    {
        return $this->fields->groupby('field_name');
    }


    /**
     * process each fields by field type
     * @return $this
     */
    public function processFields()
    {
        $container = $this->container;
        $this->fields->transform(
            function (PageField $item) use ($container) {
                switch ($item->field_type) {
                    case 'PlanText':
                        return $item;
                    case 'HTML':
                        $field = new HtmlField($item);
                        return $field->processData();
                    case 'InterLink':
                        $field = new InterLinkField($item, $container['pageModule']);
                        return $field->processData();
                    default:
                        return $item;
                }
            }
        );
        return $this;
    }
}
