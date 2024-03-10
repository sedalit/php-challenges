<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\GetSameParity\getSameParity;

class GetSameParityTest extends TestCase {
    public function testGetSameParity1() : void
    {
        $data = [-1, 0, 1, -3, 10, -2];
        $expected = [-1, 1, -3];
        $this->assertEquals($expected, getSameParity($data));
    }

    public function testGetSameParity2() : void
    {
        $data = [-2, 5, 1, -3, 10, 2];
        $expected = [-2, 10, 2];
        $this->assertEquals($expected, getSameParity($data));
    }

    public function testGetSameParity3() : void
    {
        $data = [];
        $expected = [];
        $this->assertEquals($expected, getSameParity($data));
    }
}