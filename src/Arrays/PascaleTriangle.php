<?php

namespace Sedalit\PhpChallenges\Arrays\PascaleTriangle;

/**
 * Функция, вычисляющая строку в треугольнике Паскаля по её порядковому номеру
 * @param int Порядковый номер строки
 * @return array Строка в треугольнике Паскаля
 */
function pascaleTriangle(int $number) : array
{
    if ($number <= 0) return [1];
    if ($number === 1) return [1, 1];

    $previousRow = pascaleTriangle($number - 1);
    $count = count($previousRow);
    $result[] = 1;

    for ($i = 0; $i < $count; $i++) {
        $nextNumber = 0;
        $currentNumber = $previousRow[$i];

        if (isset($previousRow[$i + 1])) $nextNumber = $previousRow[$i + 1];

        $result[] = $currentNumber + $nextNumber;
    }

    return $result;
}