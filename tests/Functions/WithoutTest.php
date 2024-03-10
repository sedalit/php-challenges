<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\Without\without;

class WithoutTest extends TestCase {

    public function testWithout1() : void
    {
        $data = [3, 4, 10, 4, 'true'];
        $expected = [3, 10, 'true'];

        $this->assertEquals($expected, without($data, 4));
    }

    public function testWithout2() : void
    {
        $data = ['2', 0, 3];
        $expected = $data;

        $this->assertEquals($expected, without($data, 5, 4));
    }

    public function testWithout3() : void
    {
        $data = [];
        $expected = $data;

        $this->assertEquals($expected, without($data, 5, 4));
    }
}