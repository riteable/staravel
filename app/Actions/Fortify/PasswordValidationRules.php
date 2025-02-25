<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<mixed>
     */
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }
}
