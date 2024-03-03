<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\FromPairs;

/**
 * Функиця, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.
 */
function fromPairs(array $array) : array
{
    $result = [];

    foreach ($array as [$key, $value]) {
        $result[$key] = $value;
    }

    return $result;
}