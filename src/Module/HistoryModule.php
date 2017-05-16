<?php

namespace Tink\Module;

use \Tink\Model\Account;
use \Tink\Model\History;
use \Valitron\Validator;

/**
 * Description of UserModule.
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
     * @param array $ar
     *
     * @return bool
     */
    public function create($data, $status, Account $ac, $acTo = null)
    {
        $histroy = new History();
        $histroy->amount = $data['amount'];
        $histroy->action = $status;
        $histroy->account_id = $ac->id;
        $histroy->related_ac = $acTo;
        $histroy->save();
        $ac->calBalance($data['amount'], $status);
        $ac->save();
    }

    public function validator($data)
    {
        $validator = new Validator($data, $this->getValidatorField());
        $validator->rule('required', ['amount']);
        $validator->rule('numeric', ['amount']);

        return $validator;
    }

    private function getValidatorField()
    {
        return ['account_id','action','amount'];
    }
}
