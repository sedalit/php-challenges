<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\ArrayDifferences;

/**
 * Функция, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде ассоциативного массива. 
 * Ключами результирующего массива будут все ключи из двух входящих массивов, а значением строка с описанием отличий => added, deleted, changed или unchanged.
 */
function arrayDifferences(array $first, array $second) : array
{
    $result = [];

    $merged = array_merge($first, $second);
    foreach ($merged as $key => $value) {
        if ($first[$key] && $second[$key] && $first[$key] !== $second[$key]) {
            $result[$key] = "changed";
        } elseif ($first[$key] && $second[$key] && $first[$key] === $second[$key]) {
            $result[$key] = "unchanged";
        } elseif ($first[$key] && !$second[$key]) {
            $result[$key] = "deleted";
        } elseif (!$first[$key] && $second[$key]) {
            $result[$key] = "added";
        }
    }

    return $result;
}