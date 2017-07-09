<?php

namespace Tink\Module\Transfer\Rule;

interface RuleInterface
{
    /**
     * validate rlue.
     *
     * @return bool
     */
    public function validate();

    /**
     * get Error Message.
     *
     * @return string
     */
    public function getErrorMsg();
}
