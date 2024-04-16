<?php

namespace Validatecollect\Validators;

use Validatecollect\src\Validator\AbstractValidator;

class NumberValidator extends AbstractValidator
{

    protected string $message = 'В :field должны быть буквы';

    public function rule(): bool
    {
        return !ctype_digit($this->value);
    }
}
