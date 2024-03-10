<?php

namespace Sedalit\PhpChallenges\Functions\GetGirlFriends;

use function Funct\Collection\flatten;

/**
 * Функция, которая принимает на вход список пользователей и возвращает плоский список подруг всех пользователей. 
 * Друзья каждого пользователя хранятся в виде массива в ключе friends. 
 * Пол доступен по ключу gender и может принимать значения male или female.
 */
function getGirlFriends(array $users) : array
{
    $mapCallback = function(array $user) {
        return array_filter($user['friends'], fn(array $friend) => $friend['gender'] === "female");
    };

    $result = array_map($mapCallback, $users);

    return flatten($result);
}
