<?php

namespace App\Classes;

class User implements ComparableInterface {
    /**
     * ID пользователя
     * @var int
     */
    protected $id;

    public function __construct(int $id) 
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function compareTo(User $user): bool
    {
        return $this->id === $user->id;
    }
}