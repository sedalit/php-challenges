<?php

namespace App\ObjectOrientedDesign;

interface ObjInterface {
    public function __get($key);

    public function __set($key, $value);
}