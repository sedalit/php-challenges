<?php

namespace Sedalit\PhpChallenges\Basic\IsPowerOfThree;

/**
     * Функция, которая определяет, является ли переданное число натуральной степенью тройки. 
     * @param int Целое число
*/
function isPowerOfThree(int $number) : bool
{
    if ($number === 1) return true;

    $result = log($number, 3);

    return $result - floor($result) == 0;
}