<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Circle;

class CircleTest extends TestCase {
    public function testGetArea() : void
    {
        $circle = new Circle(10);

        $this->assertEquals(314, $circle->getArea());
    }

    public function testGetCircumference() : void
    {
        $circle = new Circle(10);

        $this->assertEquals(62.8, $circle->getCircumference(), 2);
    }
}