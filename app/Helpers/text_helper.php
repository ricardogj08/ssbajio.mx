<?php

/**
 * Elimina todos los espacios sobrantes de un string.
 */
function trimAll(string $str)
{
    return trim(preg_replace('/\s+/', ' ', $str));
}

/**
 * Convierte un string a minúsculas.
 */
function lowerCase(string $str)
{
    return mb_strtolower($str, 'utf-8');
}
