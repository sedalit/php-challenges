<?php

namespace Tests\Classes;

use App\Classes\Point;
use App\Classes\Segment;
use function App\Classes\SegmentFunctions\reverse;
use PHPUnit\Framework\TestCase;

class SegmentTest extends TestCase {

    public function testReverse() : void
    {
        $segment = new Segment(
            new Point(1, 2),
            new Point(4, 5)
        );

        $result = reverse($segment);

        $expected = $segment->getEndPoint();

        $this->assertEquals($expected, $result->getBeginPoint());
    }
}