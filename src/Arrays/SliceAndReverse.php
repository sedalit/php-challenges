<?php

namespace Sedalit\PhpChallenges\Arrays\SliceAndReverse;

/**
 * Функция, делающая срез массива и добавляющая реверсивное значение среза в итоговый массив
 * @param array $array Массив
 * @param int $startIndex Индекс, с которого нужно начать срез
 * @param int $endIndex Индекс, по который нужно сделать срез
 */
function sliceAndReverse(array $array, int $startIndex, int $endIndex) : array
{
    $result = $array;

    for ($i = $startIndex; $i < $endIndex; $i++) { 
        $result[$i] = $array[$i];
        $result[$endIndex - $i + 1] = $array[$i];
    
    }

    return $result;
}