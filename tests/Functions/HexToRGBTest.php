<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\HexToRGB\hexToRGB;

class HexToRGBTest extends TestCase {

    public function testHexToRGB1() : void
    {
        $hex = '#24ab00';
        $expected = ["r" => 36, "g" => 171, "b" => 0];

        $this->assertEquals($expected, hexToRGB($hex));
    }

    public function testHexToRGB2() : void
    {
        $hex = '#808080';
        $expected = ["r" => 128, "g" => 128, "b" => 128];

        $this->assertEquals($expected, hexToRGB($hex));
    }
}