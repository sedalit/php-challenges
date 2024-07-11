<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Time;

class TimeTest extends TestCase {
    public function testTime() : void
    {
        $time = Time::fromString("10:23");

        $this->assertEquals("10:23", $time);
    }
}