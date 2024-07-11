<?php

namespace App\Classes;

use App\Classes\User;

interface ComparableInterface {
    public function compareTo(User $user) : bool;
}