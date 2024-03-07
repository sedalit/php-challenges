<?php

namespace Sedalit\PhpChallenges\Arrays\GetSameCount;

/**
 * Функция, которая считает количество общих уникальных элементов для двух массивов
 */
function getSameCount(array $first, array $second) : int
{
    $sameCount = 0;
    $checked = [];

    foreach ($first as $number) {
        if (in_array($number, $second) && !in_array($number, $checked)) {
            $sameCount++;
            $checked[] = $number;
        }
    }

    return $sameCount;
}