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
        /* @var $accountModule \Tink\Module\AcccountModule */
        $accountModule = $this->container['acccountModule'];

        /* @var $acInfo \Tink\Model\Account */
        $fromAcc = $this->container['ac'];

        $toAcc = $accountModule->getAcInfo($args['toid']);

        if ($toAcc === null) {
            return $response->write(\json_encode(['status'=>'transfer to account not exists']));
        }

        /* @var $history \Tink\Module\HistoryModule */
        $history = $this->container['historyModule'];
        $validator = $history->validator($request->getParsedBody());
        if (!$validator->validate()) {
            return $response->write(\json_encode($validator->errors()));
        }

        /* @var $transferModule \Tink\Module\TransferModule */
        $transferModule = $this->container['transferModule'];

        /* @var $buildTransfer \Tink\Module\Transfer\BuildTransfer */
        $buildTransfer = $this->container['buildTransfer'];
        $transferModule->setTransfer($buildTransfer->create($fromAcc, $toAcc, $validator->data()));

        $result = $transferModule->canTransfer();

        if ($result['status'] === false) {
            return $response->write(\json_encode(['status'=>$result['msg']]));
        }

        //do transfer
        $transferModule->transfer($history);

        return $response->write(\json_encode(['data'=>$fromAcc->toArray(), 'status'=>'success']));
    }
}
