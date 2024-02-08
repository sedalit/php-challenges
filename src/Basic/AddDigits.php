<?php

namespace Sedalit\PhpChallenges\Basic\AddDigits;

/**
     * Функцию, которая принимает на вход неотрицательное целое число и возвращает другое число, 
     * полученное итеративным сложением всех входящих в него цифр до тех пор пока, не останется одна цифра.
     * @param int $number Неотрицательное число
*/
function addDigits(int $number) : int
{
    if ($number < 10) return $number;

    $result = 0;
    $digits = str_split($number);

    foreach ($digits as $digit) {
        $result += addDigits($digit);
    }

    return $result;
}