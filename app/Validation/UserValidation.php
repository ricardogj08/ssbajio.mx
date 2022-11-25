<?php

namespace App\Validation;

class UserValidation
{
    public function password(string $str, ?string &$error = null): bool
    {
        if (ctype_graph($str)) {
            return true;
        }

        $error = lang('Validation.regex_match', ['field' => 'password']);

        return false;
    }
}
