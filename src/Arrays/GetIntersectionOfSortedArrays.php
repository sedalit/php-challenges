<?php

namespace Sedalit\PhpChallenges\Arrays\GetIntersectionOfSortedArrays;

/**
 * Функция, которая принимает на вход два отсортированных массива и находит их пересечение.
 */
function getIntersectionOfSortedArrays(array $first, array $second) : array
{
    $result = [];

    $smallerArray = count($first) > count($second) ? $second : $first;
    $otherArray = $smallerArray == $first ? array_flip($second) : array_flip($first);

    for ($i = 0; $i < count($smallerArray); $i++) {
        if (array_key_exists($smallerArray[$i], $otherArray)) $result[] = $smallerArray[$i];
    }

    return $result;
}