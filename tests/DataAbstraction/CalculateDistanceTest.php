<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\DataAbstraction\CalculateDistance\calculateDistance;

class CalculateDistanceTest extends TestCase {

    public function testCalculateDistance() : void
    {
        $point1 = [0, 0];
        $point2 = [3, 4];

        $this->assertEquals(5, calculateDistance($point1, $point2));
    }
}