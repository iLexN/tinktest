<?php

namespace Tink\Module\Transfer;

use Tink\Model\Account;

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

    public function __construct(\Slim\Container $container, Account $from, Account $to, $data)
    {
        $this->container = $container;
        $this->from = $from;
        $this->to = $to;
        $this->data = $data;
    }

    protected function checkdailyLimit()
    {
        $sum = $this->from->history()->where('created_at', 'like', date('Y-m-d').'%')
                ->where('action', 'transferTo')->sum('amount');

        return ($sum + $this->data['amount']) <= 10000;
    }
}
