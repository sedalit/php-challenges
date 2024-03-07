<?php

namespace Sedalit\PhpChallenges\Arrays\Exchange;

/**
     * Функция, которая меняет местами два элемента относительно переданного индекса. 
     * Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
     * @param array $array Массив
     * @param int $index Индекс элемента в массиве, относительно которого нужно поменять местами соседние элементы
*/
function exchange(array $array, int $index) : array
{
    $left = $index - 1;
    $right = $index + 1;
    
    $canSwap = isset($array[$left]) && isset($array[$right]);

    if ($canSwap) {
        $temp = $array[$left];
        $array[$left] = $array[$right];
        $array[$right] = $temp;
    }

    return $array;
}