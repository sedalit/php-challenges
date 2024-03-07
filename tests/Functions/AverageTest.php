<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\Average\average;

class AverageTest extends TestCase {
    public function testAverage() : void
    {
        $this->assertEquals(3, average(1, 2, 3, 4, 5));
        $this->assertEquals(0, average());
    }
}