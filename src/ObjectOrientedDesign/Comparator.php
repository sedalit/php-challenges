<?php

namespace App\ObjectOrientedDesign\Comparator;

use Ds\Stack;

/**
 * Функция, сравнивающая две строки.
 * Особенность строчек в том они могут содержать символ #, соответствующий нажатию клавиши Backspace. 
 * Она означает, что нужно стереть предыдущий символ: abd##a# превращается в a.
 * @param string $firstSequence
 * @param string $secondSequence
 * @return bool
 */
function compare(string $firstSequence, string $secondSequence) : bool
{
    return processString($firstSequence) === processString($secondSequence);
}

function processString(string $string) : string
{
    $stack = new Stack();
    $splittedString = str_split($string);

    array_map(function(string $char) use ($stack) {
        if ($char === '#') {
            if (count($stack) > 0) $stack->pop();
        } else {
            $stack->push($char);
        }
    }, $splittedString);

    return implode($stack->toArray());
}