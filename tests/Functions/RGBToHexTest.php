<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\RGBToHex\RGBToHex;

class RGBToHexTest extends TestCase {

    public function testRGBToHex1() : void
    {
        $this->assertEquals('#24ab00', RGBToHex(36, 171, 0));
    }

    public function testRGBToHex2() : void
    {
        $this->assertEquals('#008000', RGBToHex(0, 128, 0));
    }

    public function testRGBToHex3() : void
    {
        $this->assertEquals('#ffffff', RGBToHex(255, 255, 255));
    }
}