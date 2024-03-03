<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\FindWhere;

/**
 * Функция, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива), и возвращает первый элемент исходного массива, значения которого соответствуют переданным парам (всем переданным). 
 */
function findWhere(array $array, array $search) : array
{
    foreach ($array as $value) {
        if ($value == array_merge($value, $search)) {
            return $value;
        }
    }
    
    return [];
}