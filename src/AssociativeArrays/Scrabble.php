<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\Scrabble;

/**
 * Функция, которая принимает на вход два параметра: набор символов (строку) и слово, и проверяет, можно ли из переданного набора составить это слово. 
 * @param string $chars Набор символов.
 * @param string $targetWord Целевое слово, возможность составления которого будет проверяться.
 * @return bool Значение, отражающее возможность составления целевого слова (true или false)
 */
function scrabble(string $chars, string $targetWord) : bool
{
    $first = str_split($chars);
    $second = str_split($targetWord);

    $result = array_intersect($first, $second);

    return count($result) === strlen($targetWord);
}