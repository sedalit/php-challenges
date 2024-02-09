<?php

namespace Sedalit\PhpChallenges\Basic\IsBracketsBalanced;

/**
     * Функция, которая определяет, является ли переданные пары скобок валидными (не нарушен порядок открытия скобок и на каждую открывающую скобку есть закрывающая).
     * Для проверки строки функция использует регулярное выражение
     * @param string $string Любое количество символов '{', '}', '[', ']', '(', ')'
*/
function isBracketsBalancedRegexp(string $string) : bool
{
    $brackets = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    $stringForReturn = $string;
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if (in_array($char, $brackets)) {
            $closedBracket = array_keys($brackets, $char)[0];
            $openedBracket = $char;
        } else {
            $openedBracket = $brackets[$char];
            $closedBracket = $char;
        }
        $regexp = "/\\" . $openedBracket . "\\" . $closedBracket . "/";
        $stringForReturn = preg_replace($regexp, "", $stringForReturn);
    }

    return strlen($stringForReturn) === 0;
}

/**
     * Функция, которая определяет, является ли переданные пары скобок валидными (не нарушен порядок открытия скобок и на каждую открывающую скобку есть закрывающая).
     * Дополнительный вариант реализации, в котором вместо регулярного выражения используется стек.
     * @param string $string Любое количество символов '{', '}', '[', ']', '(', ')'
*/
function isBracketsBalancedStack(string $string) : bool 
{
    $brackets = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    $stack = [];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if (in_array($char, $brackets)) {
            $stack[] = $char;
        } else {
            $openedBracket = $brackets[$char]; 
            $lastItem = $stack[-1] ?? $stack[0];
            if (count($stack) === 0) {
                return false;
            } else if ($lastItem != $openedBracket) {
                return false;
            } else {
                array_pop($stack);
            }

        }
    }

    return count($stack) === 0;
}