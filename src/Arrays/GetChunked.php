<?php

namespace Sedalit\PhpChallenges\Arrays\GetChunked;

/**
 * Функция, разбивающая переданный массив на чанки.
 * @param array $array Массив для разбития
 * @param int $chunkSize Максимальное число элементов в одном чанке
 */
function getChunked(array $array, int $chunkSize) : array
{
    if ($chunkSize <= 0) return [];

    $result = [];
    $chunk = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i > 0 && $i % $chunkSize === 0) $chunk++;
        $result[$chunk][] = $array[$i];
    }

    return $result;
}