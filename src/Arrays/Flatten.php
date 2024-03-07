<?php

namespace Sedalit\PhpChallenges\Arrays\Flatten;

/**
 * Функция, выпрямляющая переданный массив (сводящая элементы-массивы к одному результирующиму массиву)
 */
function flatten(array $array) : array
{
    $result = [];

    foreach ($array as $value) {
        if (is_array($value)) {
            $result = [...$result, ...$value];
        } else {
            $result[] = $value;
        }
    }

    return $result;
}