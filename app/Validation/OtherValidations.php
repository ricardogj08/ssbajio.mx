<?php

namespace App\Validation;

use CodeIgniter\I18n\Time;

class OtherValidations
{
    /**
     * Valida que una contraseña no contenga espacios o secuencias de escape.
     */
    public function password(string $password): bool
    {
        return ctype_graph($password);
    }

    /**
     * Valida que una fecha sea mayor o igual a la fecha actual.
     */
    public function date_greater_than_equal_to_now(string $date): bool
    {
        return Time::parse($date)->isAfter(Time::now());
    }
}
