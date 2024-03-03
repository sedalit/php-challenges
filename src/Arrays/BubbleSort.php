<?php

namespace Sedalit\PhpChallenges\Arrays\BubbleSort;

/**
 * Функция, выполняющая пузырьковую сортировку массива
 */
function bubbleSort(array $array) : array
{
    $size = count($array);
    do {
       $swapped = false;
       for($i = 0; $i < $size - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
            
            $swapped = true;
        }

    }
    } while ($swapped);
    
    return $array;
}