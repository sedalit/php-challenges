<?php

namespace App\Classes\UserFunctions;

use App\Classes\User;

/**
 * Функцию, которая сравнивает переданных пользователей на основе значений их идентификаторов.
 * @param \App\Classes\User $firstUser
 * @param \App\Classes\User $secondUser
 * @return bool
 */
function areUsersEqual(User $firstUser, User $secondUser) : bool
{
    return $firstUser == $secondUser;
}