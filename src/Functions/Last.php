<?php

namespace Sedalit\PhpChallenges\Functions\Last;

/**
 * Анонимная функция, возвращающая последний символ переданной строки или null, если строка пуста
 */
function last(string $string)
{
    $last = fn(string $string) => $string[-1] ?? null;
    
    return $last($string);
}