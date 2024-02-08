<?php

namespace Sedalit\PhpChallenges\Basic\BinarySum;

/**
     * Функция, которая принимает на вход любое количество бинарных чисел (в виде строк) и возвращает их сумму (в виде строки). 
     * @param string $first 
     * @param string $other
     * @return string
*/

function binarySum(string $first, string $second) : string
{
    $first = bindec($first);
    $second = bindec($second);

    return decbin($first + $second);
}