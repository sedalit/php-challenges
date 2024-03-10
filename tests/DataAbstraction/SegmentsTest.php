<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\DataAbstraction\Segments\makeSegment;
use function Sedalit\PhpChallenges\DataAbstraction\Segments\getBeginPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Segments\getEndPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Segments\getMidpointOfSegment;
use function Sedalit\PhpChallenges\DataAbstraction\Points\makeDekartPoint;

class SegmentsTest extends TestCase {

    public function testMakeSegment() : void
    {
        $start = makeDekartPoint(3, 1);
        $end = makeDekartPoint(4, 6);

        $expected = ['start' => $start, 'end' => $end];
        $this->assertEquals($expected, makeSegment($start, $end));
    }

    public function testGetBeginPoint() : void
    {
        $start = makeDekartPoint(3, 1);
        $end = makeDekartPoint(4, 6);
        $segment = makeSegment($start, $end);

        $expected = ['x' => 3, 'y' => 1];
        $this->assertEquals($expected, getBeginPoint($segment));
    }

    public function testGetEndPoint() : void
    {
        $start = makeDekartPoint(3, 1);
        $end = makeDekartPoint(4, 6);
        $segment = makeSegment($start, $end);

        $expected = ['x' => 4, 'y' => 6];
        $this->assertEquals($expected, getEndPoint($segment));
    }

    public function testGetMidpointOfSegment() : void
    {
        $start = makeDekartPoint(3, 2);
        $end = makeDekartPoint(0, 0);
        $segment = makeSegment($start, $end);

        $expected = ['x' => 1.5, 'y' => 1];
        $this->assertEquals($expected, getMidpointOfSegment($segment));
    }
}