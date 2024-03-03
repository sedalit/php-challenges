<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\PickFromNestedArray;

/**
 * Функция, извлекающая из переданного массива все элементы по указанным ключам. Значением ключа может быть массив.
 * @param array $array Массив, из которого нужно извлечь данные
 * @param array $keys Массив ключей, значения которых нужно извлечь
 */
function pickFromNestedArray(array $array, array $keys) : array
{
    $result = [];

    foreach ($array as $key => $value) {
        $inKeys = in_array($key, $keys);

        if (is_array($value)) {
            $picked = pickFromNestedArray($value, $keys);
            $result = array_merge($result, $picked);
        } 
        if ($inKeys) $result[$key] = $value;
    }

    return $result;
}