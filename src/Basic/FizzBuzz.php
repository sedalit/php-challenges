<?php

namespace Sedalit\PhpChallenges\Basic\FizzBuzz;

/**
    * Функция, которая выводит на экран числа в диапазоне от $begin до $end. При этом:
    *
    *   - Если число делится без остатка на 3, то вместо него выводится слово Fizz
    *   - Если число делится без остатка на 5, то вместо него выводится слово Buzz
    *   - Если число делится без остатка и на 3, и на 5, то вместо числа выводится слово FizzBuzz
    *   - В остальных случаях выводится само число
    * @param int $begin Целое число, определяющее начало диапазона
    * @param int $end Целое число, определяющее конец диапазона (включительно)
    * @return string Итоговая строка
*/
function fizzBuzz(int $begin, int $end) : string
{
    $result = "";
    for ($i = $begin; $i <= $end; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $result .= "FizzBuzz ";
        } else if ($i % 3 === 0) {
            $result .= "Fizz ";
        } else if ($i % 5 === 0) {
            $result .= "Buzz ";
        } else {
            $result .= "{$i} ";
        }
    }
    $result = trim($result);
    echo $result;

    return $result;
}