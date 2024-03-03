<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\PickFromArray;

/**
 * Функция, извлекающая из переданного массива все элементы по указанным ключам
 * @param array $array Массив, из которого нужно извлечь данные
 * @param array $keys Массив ключей, значения которых нужно извлечь
 */
function pickFromArray(array $array, array $keys) : array
{
    $result = [];

    foreach ($keys as $value) {
        if (array_key_exists($value, $array)) $result[$value] = $array[$value];
    }
    
    return $result;
}