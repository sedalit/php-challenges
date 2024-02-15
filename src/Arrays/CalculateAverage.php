<?php

namespace Sedalit\PhpChallenges\Arrays\CalculateAverage;

/**
     * Функция, высчитывающая среднее арифметическое элементов массива.
     * @param array $array Массив
*/
function calculateAverage(array $array) : float
{
    $sum = 0;
    $count = count($array);

    if ($count <= $sum) return $sum;

    foreach ($array as $number) {
        $sum += $number;
    }

    return $sum / $count;
}