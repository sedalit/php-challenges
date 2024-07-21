<?php

namespace App\ObjectOrientedDesign;

class Obj implements ObjInterface, \ArrayAccess {

    public function __construct(array $items) 
    {
        foreach ($items as $key => $value) {
            if (is_array($value)) {
                $this->$key = new self($value);
            } else {
                $this->$key = $value;
            }
        }
    }

    public function __get($key)
    {
        return $this->$key ?? null;
    }

    public function __set($key, $value) : void
    {
        $this->$key = $value;
    }

    public function offsetSet($offset, $value) : void 
    {
        $this->$offset = $value;
    }

    public function offsetExists($offset) : bool 
    {
        return isset($this->$offset);
    }

    public function offsetUnset($offset) : void 
    {
        unset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset ?? null;
    }
}