<?php

namespace Tink\Module\Widget;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Model\Page;

abstract class AbstractWidget
{
    /** @var ContainerInterface  */
    protected $container;
    /** @var Page  */
    protected $page;
    /** @var ServerRequestInterface  */
    protected $request;

    /**
     * ContentTypeWidget constructor.
     * @param ContainerInterface $container
     * @param Page $page
     * @param ServerRequestInterface $request
     */
    public function __construct(ContainerInterface $container, Page $page, ServerRequestInterface $request)
    {
        $this->container = $container;
        $this->page = $page;
        $this->request = $request;
    }

    /**
     * @return array
     */
    abstract public function getWidget() : array;
}
