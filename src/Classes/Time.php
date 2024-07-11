<?php

namespace App\Classes;

/**
 * Класс, описывающий объект времени
 */
class Time {
    protected $hour;
    protected $minute;
    
    public function __construct($hour, $minute)
    {
        $this->hour = $hour;
        $this->minute = $minute;
    }
    
    public function __toString()
    {
        return "{$this->hour}:{$this->minute}";
    }

    public static function fromString(string $timeString) : Time
    {
        [$hour, $minute] = explode(":", $timeString);

        return new self($hour, $minute);
    }
}