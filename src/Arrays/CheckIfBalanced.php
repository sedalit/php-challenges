<?php

namespace Sedalit\PhpChallenges\Arrays\CheckIfBalanced;

/**
 * Функция, проверяющая балансировку круглых скобок в арифметических выражениях (реализовано через стек)
 * Функция не учитывает вложенность скобок, только их количество
 */
function checkIfBalanced(string $expression) : bool
{
    $stack = [];
    $expression = preg_replace("/[^(\(|\))]/", "", $expression);

    for ($i = 0; $i < strlen($expression); $i++) {
        if ($expression[$i] === "(") {
            $stack[] = $expression[$i];
        } else {
            if (count($stack) === 0) return false;
            array_pop($stack);
        }
    }
    return count($stack) === 0;
}

/**
 * Функция, проверяющая балансировку круглых скобок в арифметических выражениях (реализовано через регулярное выражение)
 * Функция не учитывает вложенность скобок, только их количество
 */
function checkIfBalancedSimple(string $expression) : bool
{
    $expression = preg_replace("/[^(\(|\))]/", "", $expression);
    return strlen($expression) % 2 === 0;
}