<?php

namespace Sedalit\PhpChallenges\Functions\GetManWithLeastFriends;

/**
 * Функция, которая принимает список пользователей и возвращает пользователя, у которого меньше всего друзей.
 * Примечания:
 *   -  Если список пользователей пустой, то возвращается null
 *   -  Если в списке есть более одного пользователя с минимальным количеством друзей, то возвращается последний из таких пользователей
 */
function getManWithLeastFriends(array $users) : array
{
    if (count($users) === 0) return [];

    return array_reduce($users, function(array $acc, array $user) {
        return count($user['friends']) <= count($acc['friends']) ? $user : $acc;
    }, $users[0]);
}