<?php

namespace Tink\Controller\Account;

use Psr\Http\Message\ServerRequestInterface;
use Tink\Controller\AbstractController;
use Tink\Controller\CollrollerResult\ControllerResult;
use Tink\Controller\CollrollerResult\ControllerResultInterface;
use Tink\Model\Account;
use Tink\Module\Transfer\BuildTransfer;

/**
 * Class Transfer : POST
 * @package Tink\Controller\Account
 */
class Transfer extends AbstractController
{
    /**
     * Transfer one ac to other other
     * @param ServerRequestInterface $request
     * @param array $args
     * @return ControllerResultInterface
     */
    public function action(ServerRequestInterface $request, array $args) : ControllerResultInterface
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];

        /** @var Account $fromAcc */
        $fromAcc = $this->container['ac'];

        $toAcc = $accountModule->getAcInfo($args['toid']);

        if ($toAcc === null) {
            return new ControllerResult(false, ['status'=>'transfer to account not exists']);
        }

        /* @var $history \Tink\Module\HistoryModule */
        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());
        if (!$validator->validate()) {
            return new ControllerResult(false, $validator->errors());
        }

        /** @var BuildTransfer $buildTransfer */
        $buildTransfer = $this->container['buildTransfer'];
        $transfer = $buildTransfer->create($fromAcc, $toAcc, $validator->data());

        $result = $transfer->canTransfer();

        if (!$result->getStatus()) {
            return new ControllerResult(false, ['status' => $result->getMsg()]);
        }

        //do transfer
        $transfer->transfer($accountModule);

        $out = ['data'=>$fromAcc->toArray(), 'status'=>'success'];
        return new ControllerResult(true, $out);
    }
}
