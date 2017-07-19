<?php

namespace Tink\Module;

use Illuminate\Support\Collection;
use Psr\Container\ContainerInterface as Container;
use Tink\Model\Page;

class PageModule
{
    /**
     * @var Container
     */
    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $uri
     * @return Page
     */
    public function getPageByUri($uri)
    {
        return Page::where('uri', $uri)
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
}
