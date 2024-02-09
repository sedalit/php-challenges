<?php

namespace Sedalit\PhpChallenges\Basic\IsPerfectNumber;

/**
     * Функция, которая определяет, является ли переданное число совершенным числом.
     * @param int $number Положительное целое число
*/
function isPerfectNumber(int $number) : bool
{
    $sumOfDividers = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) $sumOfDividers += $i;
    }

    return $sumOfDividers === $number && $sumOfDividers > 0;
}