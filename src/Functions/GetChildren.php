<?php

namespace Sedalit\PhpChallenges\Functions\GetChildren;

use function Funct\Collection\flatten;

/**
 * Функция, которая принимает на вход список пользователей и возвращает плоский список их детей. 
 * Дети каждого пользователя хранятся в виде массива в ключе children
 */
function getChildren(array $users) : array
{
    $callback = fn(array $user) => $user['children'];
    $result = array_map($callback, $users);

    return flatten($result);
}