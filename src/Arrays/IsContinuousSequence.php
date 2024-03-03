<?php

namespace Sedalit\PhpChallenges\Arrays\IsContinuousSequence;

/**
     * Функция, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). 
     * Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 1, 3] — нет. 
     * Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.
     * @param array $array Массив
*/
function isContinuousSequence(array $array) : bool
{
    if (count($array) <= 1) return false;

    $firtsNumber = $array[0];

    for ($i=1; $i < count($array); $i++) { 
        if ($array[$i] !== $firtsNumber + $i) return false;
    }

    return true;
}