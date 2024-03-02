<?php

namespace Sedalit\PhpChallenges\Arrays\SummaryRanges;

/**
 * Функцию, которая находит в массиве непрерывные возрастающие последовательности чисел и возвращает массив с их перечислением.
 * @param array $array Массив целых чисел
 * @return array Массив с перечислением найденных последовательности вида [$start->$end]
 */
function summaryRanges(array $array) : array
{
    $result = [];

    if (count($array) <= 1) return $result;

    $sequenceStart = null;
    $sequenceEnd = null;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] + 1 === $array[$i + 1]) {
            if (!$sequenceStart) $sequenceStart = $array[$i];
            $sequenceEnd = $array[$i + 1];
        } else {
            if ($sequenceStart && $sequenceEnd) $result[] = "{$sequenceStart}->{$sequenceEnd}";
            $sequenceStart = null;
            $sequenceEnd = null;
        }
    }

    return $result;
}