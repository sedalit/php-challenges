<?php

namespace App\ObjectOrientedDesign;

use stdClass;

class Converter {

    protected $properties = [];

    public function __construct(array $properties) 
    {
        $this->properties = $properties;
    }

    public function toStd() : stdClass
    {
        $std = new stdClass();

        foreach ($this->properties as $key => $value) {
            $std->$key = $value;
        }

        return $std;
    }
}