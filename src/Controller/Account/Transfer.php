<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;

class Transfer
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];

        /* @var $acInfo \Tink\Model\Account */
        $fromAcc = $this->container['ac'];

        $toAcc = $accountModule->getAcInfo($args['toid']);

        if ($toAcc === null) {
            return $response->write(\json_encode(['status'=>'transfer to account not exists']));
        }

        /* @var $history \Tink\Module\HistoryModule */
        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());
        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        /* @var $buildTransfer \Tink\Module\Transfer\BuildTransfer */
        $buildTransfer = $this->container['buildTransfer'];

        /* @var $transfer \Tink\Module\Transfer\TransferOwnerInterface */
        $transfer = $buildTransfer->create($fromAcc, $toAcc, $validator->data());

        /** @var \Tink\Module\Transfer\TransferResultInterface $result */
        $result = $transfer->canTransfer();

        if (!$result->getStatus()) {
            return $response->write(\json_encode(['status' => $result->getMsg()]));
        }

        //do transfer
        $transfer->transfer($accountModule);

        return $response->write(\json_encode(['data'=>$fromAcc->toArray(), 'status'=>'success']));
    }
}
