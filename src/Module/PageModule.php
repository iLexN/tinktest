<?php

namespace Tink\Module;

use Illuminate\Support\Collection;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tink\Model\Page;

class PageModule
{
    /** @var ContainerInterface  */
    public $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $uri
     * @return Page
     */
    public function getPageByUri($uri)
    {
        return Page::with('fields')->where('uri', $uri)
            ->first();
    }


    /**
     * @param int|array $id
     * @param array $fields
     * @return Page|Collection
     */
    public function getPageByID($id, array $fields = [])
    {
        if (empty($fields)) {
            return Page::find($id);
        }

        return Page::select($fields)->find($id);
    }

    /**
     * get All widget for this page
     * @param Page $page
     * @param ServerRequestInterface $request
     * @return array
     */
    public function getPageWidget(Page $page, ServerRequestInterface $request) : array
    {
        return $this->container['widgetManager']->getWidgetByPage($page, $request);
    }
}
