<?php

namespace Tink\Module\Transfer\Rule;

use Tink\Model\Account;

class RuleWithDrawAmount implements RuleInterface
{
    //put your code here

    protected $from;
    protected $data;

    /**
     * RuleWithDrawAmount constructor.
     * @param Account $from
     * @param array $data
     */
    public function __construct($from, $data)
    {
        $this->from = $from;
        $this->data = $data;
    }

    public function validate(): bool
    {
        if ($this->from->checkWithDraw($this->data['amount'])) {
            return true;
        }

        return false;
    }

    public function getErrorMsg(): string
    {
        return 'not enough money to transfer';
    }
}
