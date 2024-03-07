<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\SliceAndReverse\sliceAndReverse;

class SliceAndReverseTest extends TestCase {

    public function testSliceAndReverse() : void
    {
        $data = [1, 2, 3, 4];
        $start = 0;
        $end = 2;
        $expected = [1, 2, 3, 3, 2, 1];
        $this->assertEquals($expected, sliceAndReverse($data, $start, $end));

        $start = 2;
        $end = 3;
        $expected = [3, 4, 4, 3];
        $this->assertEquals($expected, sliceAndReverse($data, $start, $end));

        $data = [1, 2, 3, 4, 5, 6, 7];
        $start = 2;
        $end = 5;
        $expected = [3, 4, 5, 6, 6, 5, 4, 3];
        $this->assertEquals($expected, sliceAndReverse($data, $start, $end));
    }
}