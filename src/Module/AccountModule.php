<?php

namespace Tink\Module;

use League\Event\Emitter;
use Psr\Container\ContainerInterface;
use Stash\Pool;
use Tink\Model\Account;
use Tink\Model\Owner;
use Valitron\Validator;

/**
 * Account Module
 * CURD - for Account Table
 */
class AccountModule
{
    /** @var ContainerInterface  */
    protected $container;

    /**
     * @var Pool
     */
    protected $pool;

    /**
     * @var Emitter
     */
    protected $emit;

    /**
     * AccountModule constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->pool = $container['pool'];
        $this->emit = $container['eventEmitter'];
    }

    /**
     * Create Account.
     *
     * @param array $data
     * @param Owner $owner
     *
     * @return Account
     */
    public function create(array $data, Owner $owner): Account
    {
        $ac = new Account();
        $ac->name = $data['name'];
        $ac->balance = 0.00;
        $ac->status = Account::AC_STATUS_ACTIVE;
        $ac->ower = $owner->id;
        $ac->save();

        $this->emit->emit('account.open', $ac);

        return $ac;
    }

    /**
     * Close Account.
     * @param Account $ac
     */
    public function close(Account $ac)
    {
        $ac->status = Account::AC_STATUS_INACTIVE;
        $ac->save();

        $this->emit->emit('account.close', $ac);
    }

    /**
     * when change amount - add history.
     * @param array $data
     * @param string $status
     * @param Account $ac
     * @param int $acTo
     */
    public function amountChange(array $data, $status, Account $ac, $acTo = null)
    {
        /** @var HistoryModule $history */
        $history = $this->container['historyModule'];
        $historyObj = $history->create($data, $status, $acTo);

        $ac->history()->save($historyObj);
        $ac->calBalance($historyObj->amount, $status);
        $ac->save();

        $this->emit->emit('account.amountChange', $ac);
    }

    /**
     * Validator - before create account.
     * @param array $data
     *
     * @return Validator
     */
    public function validator($data): Validator
    {
        $validator = new Validator($data, $this->getValidatorField());
        $validator->rule('required', ['name']);
        $validator->rule('numeric', ['amount']);

        return $validator;
    }

    /**
     * get field need validator.
     * @return array
     */
    private function getValidatorField(): array
    {
        return ['name', 'amount', 'status'];
    }

    /**
     * Get Account info. Cache Key : Account/{id}
     * @param int $id
     *
     * @return Account|null
     */
    public function getAcInfo($id)
    {
        $cacheItem = $this->pool->getItem('/Account/' . $id);

        $account = $cacheItem->get();

        if (!$cacheItem->isHit()) {
            $account = Account::where('id', $id)
                ->where('status', Account::AC_STATUS_ACTIVE)
                ->first();
            $cacheItem->set($account);
            $cacheItem->expiresAfter(3600 * 3);
            $this->pool->save($cacheItem);
        }

        return $account;
    }
}
