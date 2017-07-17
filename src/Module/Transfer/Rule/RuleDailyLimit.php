<?php


namespace Tink\Module\Transfer\Rule;

use Tink\Model\Account;

class RuleDailyLimit implements RuleInterface
{
    const DAILY_LIMIT = 10000;


    private $from;
    private $data;


    /**
     * RuleDailyLimit constructor.
     * @param Account $from
     * @param array $data
     */
    public function __construct(Account $from, $data)
    {
        $this->from = $from;
        $this->data = $data;
    }

    /**
     * @inheritdoc
     * @return bool
     */
    public function validate(): bool
    {
        $sum = $this->from->history()->where('created_at', 'like', date('Y-m-d').'%')
                ->where('action', 'transferTo')->sum('amount');

        return  ($sum + $this->data['amount']) <= self::DAILY_LIMIT;
    }

    /**
     * @inheritdoc
     */
    public function getErrorMsg(): string
    {
        return 'over daily limit';
    }
}
