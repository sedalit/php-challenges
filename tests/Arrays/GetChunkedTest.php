<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetChunked\getChunked;

class GetChunkedTest extends TestCase {

    public function testGetChunked() : void
    {
        $testData = [1, 2, 3, 4, 5];
        $chunkSize = 2;
        $expected = [[1, 2], [3, 4], [5]];
        $this->assertEquals($expected, getChunked($testData, $chunkSize));

        $testData = [1, 2, 3, 4, 5];
        $chunkSize = 1;
        $expected = [[1], [2], [3], [4], [5]];
        $this->assertEquals($expected, getChunked($testData, $chunkSize));

        $testData = [1, 2, 3, 4, 5];
        $chunkSize = 0;
        $expected = [];
        $this->assertEquals($expected, getChunked($testData, $chunkSize));

        $testData = [];
        $chunkSize = 2;
        $expected = [];
        $this->assertEquals($expected, getChunked($testData, $chunkSize));
    }
}