<?php

namespace Validatecollect\Validators;

use Validatecollect\src\Validator\AbstractValidator;

class RequireValidator extends AbstractValidator
{

    protected string $message = 'Field :field is required';
//пустое - TRUE, если есть то FALSE
    public function rule(): bool
    {
        return !empty($this->value);
    }
}
