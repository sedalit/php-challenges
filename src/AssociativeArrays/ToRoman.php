<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\ToRoman;

/**
 * Функция для преобразования переданного арабского числа в римское.
 */
function toRoman(int $number) : string
{
    $romanNumbers = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    $result = "";

    $differenceToRoman = $number;
    foreach ($romanNumbers as $key => $value) {
        if ($number >= $value && $number < next($romanNumbers)) {
            $differenceToRoman -= $value;
            $result .= $key;
            if ($differenceToRoman > 0) $result .= toRoman($differenceToRoman);
        }
    }
    
    return $result;
}