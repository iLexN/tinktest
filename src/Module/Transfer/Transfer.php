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

    protected $rules = [];

    public function __construct(\Slim\Container $container, Account $from, Account $to, $data, $rules = [])
    {
        $this->container = $container;
        $this->from = $from;
        $this->to = $to;
        $this->data = $data;
        $this->rules = $rules;
    }
}
