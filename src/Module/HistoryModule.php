<?php

namespace Tink\Module;

use Tink\Model\Account;
use Tink\Model\History;
use Valitron\Validator;

/**
 * History Module - CURD for History table.
 *
 * @author user
 */
class HistoryModule
{
    /**
     * @var \Slim\Container
     */
    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    /**
     * Create History.
     * add money in/out recond.
     * also cal balance
     *
     * @param array    $data
     * @param string   $status
     * @param Account  $ac
     * @param int|null $acTo
     */
    public function create(array $data, $status, Account $ac, $acTo = null)
    {
        $histroy = new History();
        $histroy->amount = $data['amount'];
        $histroy->action = $status;
        $histroy->related_ac = $acTo;
        
        $ac->history()->save($histroy);
        $ac->calBalance($data['amount'], $status);
        $ac->save();
    }

    /**
     * Validator rule.
     * @param array $data
     *
     * @return Validator
     */
    public function validator(array $data)
    {
        $validator = new Validator($data, $this->getValidatorField());
        $validator->rule('required', ['amount']);
        $validator->rule('numeric', ['amount']);

        return $validator;
    }

    /**
     * get field need validator.
     * @return array
     */
    private function getValidatorField()
    {
        return ['account_id', 'action', 'amount'];
    }
}
