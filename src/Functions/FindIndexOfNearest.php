<?php

namespace Sedalit\PhpChallenges\Functions\FindIndexOfNearest;

/**
 * Функция, которая принимает на вход массив чисел и искомое число. Задача функции — найти в массиве ближайшее число к искомому и вернуть его индекс в массиве.
 * Если в массиве содержится несколько чисел, одновременно являющихся ближайшими к искомому числу, то возвращается наименьший из индексов ближайших чисел.
*/
function findIndexOfNearest(array $numbers, float $targetNumber) : int
{
    if (count($numbers) === 0) return -1;

    $result = array_reduce($numbers, function(array $acc, int $number) use ($targetNumber) {
        $difference = abs($number - $targetNumber);

        $index = $acc['index'];
        $value = $acc['value'];

        return $difference < $value ? ['index' => $index + 1, 'value' => $difference] : $acc;
    }, ['index' => 0, 'value' => $numbers[0]]);

    return $result['index'];
}