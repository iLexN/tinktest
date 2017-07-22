<?php

namespace Tink\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;
use Tink\Helper\ResponseResult\JsonResponse;
use Tink\Helper\ResponseResult\NotFountResponse;
use Tink\Helper\ResponseResult\ResponseResultInterface;
use Tink\Model\Page;
use Tink\Module\Fields\FieldsManager;
use Tink\Module\PageModule;

class Info extends AbstractController
{
    /**
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ResponseResultInterface
     */
    public function action(ServerRequestInterface $request, array $args): ResponseResultInterface
    {
        $uri = $request->getUri()->getPath();

        /** @var LoggerInterface $logger */
        $logger = $this->container['logger'];
        $logger->info('uri', [$uri]);

        /** @var PageModule $pageModule */
        $pageModule = $this->container['pageModule'];
        /** @var Page $page */
        $page = $pageModule->getPageByUri($uri);

        if ($page) {
            $logger->info('pageinfo', $page->toArray());
            $out = $this->getPageInfo($pageModule, $page, $request);
            return new JsonResponse($out);
        } else {
            return new NotFountResponse($request);
        }
    }

    private function getPageInfo(PageModule $pageModule, Page $page, $request)
    {

        /** @var FieldsManager $fieldsManager */
        $fieldsManager = $this->container['fieldsManager'];

        $out = [
            'pageInfo'=>$page->makeHidden('fields'),
            'pageField'=>$fieldsManager->setFields($page->fields)->processFields()->getFields(),
            //'pageField'=>$page->fields->groupby('field_name'),
        ];
        //all below will not change any page obj.

        $out['widget'] = $pageModule->getPageWidget($page, $request);

        return $out;
    }
}
