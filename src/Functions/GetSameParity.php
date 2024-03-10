<?php

namespace Sedalit\PhpChallenges\Functions\GetSameParity;

/**
 * Функция, которая принимает на вход список и возвращает новый, состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.
 */
function getSameParity(array $numbers) : array
{
    if (count($numbers) === 0) return [];

    $firstElemParity = $numbers[0] % 2;

    $filtered = array_filter($numbers, function(int $number) use ($firstElemParity) {
        return $number % 2 === $firstElemParity || $number % 2 === abs($firstElemParity);
    });

    return array_values($filtered);
}