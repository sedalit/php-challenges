<?php

namespace Sedalit\PhpChallenges\Arrays\GetSameParity;

/**
     * Функция, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.
     * @param array $array Массив целых чисел
*/
function getSameParity(array $array) : array
{
    if (empty($array)) return [];
    
    $result = [];
    $result[] = $array[0];

    $parityChecker = $array[0] % 2;

    for ($i=1; $i < count($array); $i++) { 
        $array[$i] % 2 === $parityChecker ? $result[] = $array[$i] : false;
    }

    return $result;
}