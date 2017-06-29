<?php

namespace Tink\Module\Transfer\Rule;

interface RuleInterface {

    public function validate();

    public function getErrorMsg();

}
