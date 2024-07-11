<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Point;
use function App\Classes\PointFunctions\getMidpoint;
use function App\Classes\PointFunctions\duplicate;

class PointTest extends TestCase {
    public function testGetMidpoint() : void
    {
        $firstPoint = new Point(10, 1);
        $secondPoint = new Point(1, 10);

        $result = getMidpoint($firstPoint, $secondPoint);

        $expected = new Point(5.5, 5.5);

        $this->assertEquals($expected, $result);
    }

    public function testDuplicate() : void
    {
        $point = new Point(10, 1);

        $result = duplicate($point);

        $expected = new Point(10, 1);

        $this->assertEquals($expected, $result);
    }

    public function testToString() : void
    {
        $point = new Point(1, 3);

        $this->assertEquals("(1, 3)", (string) $point);
    }
}