<?php

namespace Tink\Controller\Account;

use Slim\Http\Request;
use Slim\Http\Response;
use Tink\Controller\AbstractController;
use Tink\Controller\ControllerResult;

class Transfer extends AbstractController
{
    public function action(Request $request, array $args)
    {
        /* @var $accountModule \Tink\Module\AccountModule */
        $accountModule = $this->container['accountModule'];

        /* @var $acInfo \Tink\Model\Account */
        $fromAcc = $this->container['ac'];

        $toAcc = $accountModule->getAcInfo($args['toid']);

        if ($toAcc === null) {
            return new ControllerResult(self::JSON_RESPONSE, ['status'=>'transfer to account not exists']);
        }

        /* @var $history \Tink\Module\HistoryModule */
        $history = $this->container['historyModule'];
        $validator = $history->validator((array)$request->getParsedBody());
        if (!$validator->validate()) {
            return new ControllerResult(self::JSON_RESPONSE, $validator->errors());
        }

        /* @var $buildTransfer \Tink\Module\Transfer\BuildTransfer */
        $buildTransfer = $this->container['buildTransfer'];

        /* @var $transfer \Tink\Module\Transfer\TransferOwnerInterface */
        $transfer = $buildTransfer->create($fromAcc, $toAcc, $validator->data());

        /** @var \Tink\Module\Transfer\TransferResultInterface $result */
        $result = $transfer->canTransfer();

        if (!$result->getStatus()) {
            return new ControllerResult(self::JSON_RESPONSE, ['status' => $result->getMsg()]);
        }

        //do transfer
        $transfer->transfer($accountModule);

        $out = ['data'=>$fromAcc->toArray(), 'status'=>'success'];
        return new ControllerResult(self::JSON_RESPONSE, $out);
    }
}
