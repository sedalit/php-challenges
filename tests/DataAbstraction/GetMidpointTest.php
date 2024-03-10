<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\DataAbstraction\GetMidpoint\getMidpoint;

class GetMidpointTest extends TestCase {

    public function testGetMidpoint() : void
    {
        
        $point1 = ['x' => 0, 'y' => 0];
        $point2 = ['x' => 4, 'y' => 4];
        $expected = ['x' => 2, 'y' => 2];
        $this->assertEquals($expected, getMidpoint($point1, $point2));
    }
}