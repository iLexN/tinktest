<?php

namespace Tink\Module;

use Tink\Model\Account;
use Tink\Model\Owner;
use Valitron\Validator;

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
     * @param array $data
     * @param Owner $owner
     *
     * @return Account
     */
    public function create($data, Owner $owner)
    {
        $ac = new Account();
        $ac->name = $data['name'];
        $ac->balance = 0.00;
        $ac->status = 'Active';
        $ac->ower = $owner->id;
        $ac->save();

        return $ac;
    }

    /**
     * @param Account $ac
     *
     * @return Account
     */
    public function close(Account $ac)
    {
        $ac->status = 'inActive';
        $ac->save();
    }

    /**
     * @param array $data
     *
     * @return Validator
     */
    public function validator($data)
    {
        $validator = new Validator($data, $this->getValidatorField());
        $validator->rule('required', ['name']);
        $validator->rule('numeric', ['amount']);

        return $validator;
    }

    /**
     * @return array
     */
    private function getValidatorField()
    {
        return ['name', 'balance', 'status'];
    }

    /**
     * @param int $id
     *
     * @return Account
     */
    public function getAcInfo($id)
    {
        return Account::where('id', $id)
                ->where('status', 'Active')
                ->first();
    }
}
