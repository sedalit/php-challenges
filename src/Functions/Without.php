<?php

namespace Sedalit\PhpChallenges\Functions\Without;

use function Funct\Collection\flatten;

/**
 * Функция, которая принимает любое число аргументов, где первый аргумент массив, а все остальные - значения, которые нужно исключить из переданного массива.
 */
function without(array $array, ...$values) : array
{
    $result = array_filter($array, function ($value) use ($values) {
        return !in_array($value, $values, true);
    });

    return flatten($result);
}