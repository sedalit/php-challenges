<?php

namespace App\ObjectOrientedDesign;

interface EnumerableInerface {
    public static function wrap(array $elements) : Enumerable;

    public function where($key, $value) : Enumerable;

    public function all() : array;
}