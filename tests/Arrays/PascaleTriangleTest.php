<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\PascaleTriangle\pascaleTriangle;

class PascaleTriangleTest extends TestCase {

    public function testPascaleTriangle() : void
    {
        $number = 3;
        $expected = [1, 3, 3, 1];
        $this->assertEquals($expected, pascaleTriangle($number));

        $number = 4;
        $expected = [1, 4, 6, 4, 1];
        $this->assertEquals($expected, pascaleTriangle($number));

        $number = 5;
        $expected = [1, 5, 10, 10, 5, 1];
        $this->assertEquals($expected, pascaleTriangle($number));
    }
}