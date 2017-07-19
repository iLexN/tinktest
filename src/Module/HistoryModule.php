<?php

namespace Tink\Module;

use Psr\Container\ContainerInterface as Container;
use Tink\Model\History;
use Valitron\Validator;

/**
 * History Module - CURD for History table.
 *
 * @author user
 */
class HistoryModule
{
    public $container;

    public function __construct(Container $container)
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
     * @param int|null $acTo
     * @return History
     */
    public function create(array $data, $status, $acTo = null): History
    {
        $history = new History();
        $history->amount = $data['amount'];
        $history->action = $status;
        $history->related_ac = $acTo;

        return $history;
    }

    /**
     * Validator rule.
     * @param array $data
     *
     * @return Validator
     */
    public function validator(array $data): Validator
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
    private function getValidatorField(): array
    {
        return ['account_id', 'action', 'amount'];
    }
}
