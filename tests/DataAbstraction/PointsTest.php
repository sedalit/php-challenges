<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\DataAbstraction\Points\makeDekartPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Points\getX;
use function Sedalit\PhpChallenges\DataAbstraction\Points\getY;

class GetMidpointTest extends TestCase {

    public function testMakeDekartPoint() : void
    {
        $this->assertEquals(['x' => 3, 'y' => 1], makeDekartPoint(3, 1));
    }

    public function testGetX() : void
    {
        $point = makeDekartPoint(0, 3);
        $this->assertEquals(0, getX($point));
    }

    public function testGetY() : void
    {
        $point = makeDekartPoint(0, 3);
        $this->assertEquals(3, getY($point));
    }
}