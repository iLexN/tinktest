<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;
use Tink\Module\Transfer\TransferResultInterface;
use Tink\Module\Transfer\TransferResult;

/**
 * Transfer Class.
 */
class Transfer
{
    /**
     * @var \Slim\Container
     */
    public $container;

    /**
     * @var Account
     */
    public $from;

    /**
     * @var Account
     */
    public $to;

    /**
     * @var array
     */
    public $data;

    protected $rules = [];

    public function __construct(\Slim\Container $container, Account $from, Account $to, $data, $rules = [])
    {
        $this->container = $container;
        $this->from = $from;
        $this->to = $to;
        $this->data = $data;
        $this->rules = $rules;
    }


    /**
     * Check Can Transfer or not.
     * @return \Tink\Module\Transfer\TransferResultInterface
     */
    public function canTransfer()
    {
        foreach ($this->rules as $rule) {
            if (!$rule->validate()) {
                return new TransferResult(false, $rule->getErrorMsg());
                //return ['status'=>false, 'msg'=>$rule->getErrorMsg()];
            }
        }

        return new TransferResult(true, 'can transfer');
        //return ['status'=>true, 'msg'=>'can transfer'];
    }
}
