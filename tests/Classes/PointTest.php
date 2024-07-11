<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Point;
use function App\Classes\Functions\getMidpoint;

class PointTest extends TestCase {
    public function testGetMidpoint() : void
    {
        $firstPoint = new Point(10, 1);
        $secondPoint = new Point(1, 10);

        $result = getMidpoint($firstPoint, $secondPoint);

        $expected = new Point(5.5, 5.5);

        $this->assertEquals($expected, $result);
    }
}