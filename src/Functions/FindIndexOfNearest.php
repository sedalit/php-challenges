<?php

namespace Sedalit\PhpChallenges\Functions\FindIndexOfNearest;

/**
 * Функция, которая принимает на вход массив чисел и искомое число. Задача функции — найти в массиве ближайшее число к искомому и вернуть его индекс в массиве.
 * Если в массиве содержится несколько чисел, одновременно являющихся ближайшими к искомому числу, то возвращается наименьший из индексов ближайших чисел.
*/
function findIndexOfNearest(array $numbers, float $targetNumber) : float
{
    if (count($numbers) === 0) return -1;

    $index = 0;
    array_reduce($numbers, function(int $acc, int $number) use ($targetNumber, $index) {
        $difference = abs($number - $targetNumber);
        $index++;
        return $difference < $acc ? $difference : $acc;
    }, $numbers[0]);

    return $index;
}