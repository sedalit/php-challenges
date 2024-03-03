<?php

namespace Sedalit\PhpChallenges\Arrays\LengthOfLastWord;

/**
 * Функция, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность, не содержащая пробелов.
 */
function lengthOfLastWord(string $string) : int
{
    $string = trim($string);

    $array = explode(" ", $string);
    
    return strlen(end($array));
}