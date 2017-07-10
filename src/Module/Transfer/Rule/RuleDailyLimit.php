<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

/**
 * Description of RuleDailyLimit.
 *
 * @author user
 */
class RuleDailyLimit implements RuleInterface
{
    const DAILY_LIMIT = 10000;

    private $from;
    private $data;

    public function __construct($from, $data)
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
