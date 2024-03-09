<?php

namespace Sedalit\PhpChallenges\Functions\TakeOldest;

/**
 * Функция, принимающая на вход массив пользователей и возвращающая самого взрослого пользователя
 */
function takeOldest(array $users) : array
{
    $result = [];

    $callback = fn(array $a, array $b) => $a['birthday'] <=> $b['birthday'];

    usort($users, $callback);
    $result = $users[0];

    return $result;
}