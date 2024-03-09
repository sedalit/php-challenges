<?php

namespace Sedalit\PhpChallenges\Functions\Average;

/**
 * Функция, считающая среднее арифметическое всех переданных аргументов
 */
function average(float ...$numbers) : float
{
    $result = 0;

    if (count($numbers) === 0) return $result;

    foreach ($numbers as $value) {
        $result += $value;
    }

    return $result / count($numbers);
}