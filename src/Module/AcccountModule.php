<?php

namespace Tink\Module;

use \Tink\Model\Account;
use Tink\Model\Owner;
use \Valitron\Validator;

/**
 * Description of UserModule.
 *
 * @author user
 */
class AcccountModule
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
     * @return Account
     */
    public function create($data, Owner $owner)
    {
        $ac = new Account();
        $ac->name = $data['name'];
        $ac->balance = isset($data['balance'])? $data['balance']:0.00;
        $ac->status = 'Active';
        $ac->ower = $owner->id;
        $ac->save();
        return $ac;
    }

    public function close(Account $ac)
    {
        $ac->status = 'inActive';
        $ac->save();
    }

    public function validator($data)
    {
        $validator = new Validator($data, $this->getValidatorField());
        $validator->rule('required', ['name']);
        $validator->rule('numeric', ['balance']);

        return $validator;
    }

    private function getValidatorField()
    {
        return ['name','balance','status'];
    }

    public function getAcInfo($id)
    {
        return Account::where('id', $id)
                ->where('status', 'Active')
                ->first();
    }
}
