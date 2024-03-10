<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\FindIndexOfNearest\findIndexOfNearest;

class FindIndexOfNearestTest extends TestCase {

    public function testFindIndexOfNearestTest1() : void
    {
        $data = [15, 10, 3, 4];
        $number = 0;
        $expected = 2;

        $this->assertEquals($expected, findIndexOfNearest($data, $number));
    }

    public function testFindIndexOfNearestTest2() : void
    {
        $data = [3, 10, -3, 4];
        $number = 0;
        $expected = 0;

        $this->assertEquals($expected, findIndexOfNearest($data, $number));
    }

    public function testFindIndexOfNearestTest3() : void
    {
        $data = [];
        $number = 3;
        $expected = -1;

        $this->assertEquals($expected, findIndexOfNearest($data, $number));
    }
}