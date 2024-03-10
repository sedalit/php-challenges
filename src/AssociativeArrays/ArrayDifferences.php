<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\ArrayDifferences;

/**
 * Функция, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде ассоциативного массива. 
 * Ключами результирующего массива будут все ключи из двух входящих массивов, а значением строка с описанием отличий => added, deleted, changed или unchanged.
 * 
 * Возможные значения:
 *
 * added — ключ отсутствовал в первом массиве, но был добавлен во второй
 * deleted — ключ был в первом массиве, но отсутствует во втором
 * changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
 * unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями
 */
function arrayDifferences(array $first, array $second) : array
{
    $result = [];

    $merged = array_merge($first, $second);
    foreach ($merged as $key => $value) {
        $isExistInFirst = array_key_exists($key, $first);
        $isExistInSecond = array_key_exists($key, $second);

        if ($isExistInFirst && $isExistInSecond && $first[$key] !== $second[$key]) {
            $result[$key] = "changed";
        } elseif ($isExistInFirst && $isExistInSecond && $first[$key] === $second[$key]) {
            $result[$key] = "unchanged";
        } elseif ($isExistInFirst && !$isExistInSecond) {
            $result[$key] = "deleted";
        } elseif (!$isExistInFirst && $isExistInSecond) {
            $result[$key] = "added";
        }
    }
    
    return $result;
}