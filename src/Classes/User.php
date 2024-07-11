<?php

namespace App\Classes;

class User {
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
}