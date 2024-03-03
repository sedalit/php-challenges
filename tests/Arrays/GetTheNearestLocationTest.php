<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetTheNearestLocation\getTheNearestLocation;

class GetTheNearestLocationTest extends TestCase {
    
    public function testGetTheNearestLocationTest() : void
    {
        $locations = [
            ['Park', [10, 5]],
            ['Sea', [1, 3]],
            ['Museum', [8, 4]],
        ];
        $currentPoint = [5, 5];
        $expected = ['Museum', [8, 4]];
        $this->assertEquals($expected, getTheNearestLocation($locations, $currentPoint));
    }
}