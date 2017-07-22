<?php

namespace Tink\Module\Transfer\Rule;

use Tink\Model\Account;

/**
 * Class RuleWithDrawAmount
 * @package Tink\Module\Transfer\Rule
 */
class RuleWithDrawAmount implements RuleInterface
{
    /** @var Account  */
    protected $from;
    /** @var array  */
    protected $data;

    /**
     * RuleWithDrawAmount constructor.
     * @param Account $from
     * @param array $data
     */
    public function __construct(Account $from, array $data)
    {
        $this->from = $from;
        $this->data = $data;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        if ($this->from->checkWithDraw($this->data['amount'])) {
            return true;
        }

        return false;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return 'not enough money to transfer';
    }
}
