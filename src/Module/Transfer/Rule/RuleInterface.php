<?php

namespace Tink\Module\Transfer\Rule;

interface RuleInterface
{
    /**
     * validate rule.
     *
     * @return bool
     */
    public function validate(): bool;

    /**
     * get Error Message.
     *
     * @return string
     */
    public function getErrorMsg(): string;
}
