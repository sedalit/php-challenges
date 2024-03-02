<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\SummaryRanges\summaryRanges;

class SummaryRangesTest extends TestCase {
    public function testSliceAndReverse() : void
    {
        $data = [1, 2, 3, 4];
        $expected = ["1->4"];
        $this->assertEquals($expected, summaryRanges($data));

        $data = [1];
        $expected = [];
        $this->assertEquals($expected, summaryRanges($data));

        $data = [110, 111, 112, 111, -5, -4, -2, -3, -2, -1];
        $expected = ["110->112", "-5->-4", "-3->-1"];
        $this->assertEquals($expected, summaryRanges($data));
    }
}