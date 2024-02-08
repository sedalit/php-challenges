<?php

namespace Sedalit\PhpChallenges\Basic\Fibonacci;

/**
     * Функция, которая находит число Фибоначчи по его порядковому номеру.
     * @param int $number Порядковый номер числа
*/
function fibonacci(int $number) : int
{
    if ($number <= 0) return 0;
    if ($number == 1) return 1;

    return fibonacci($number - 1) + fibonacci($number - 2);
}