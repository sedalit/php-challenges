<?php

namespace App\Classes\UserFunctions;

use App\Classes\User;

function areUsersEqual(User $firstUser, User $secondUser) : bool
{
    return $firstUser == $secondUser;
}

//$firstUser = new User(12);

//areUsersEqual($firstUser, $firstUser);