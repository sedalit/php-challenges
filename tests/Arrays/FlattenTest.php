<?php

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\Flatten\flatten;

class FlattenTest extends TestCase {

    public function testFlatten() : void
    {
        $testData = [1, 2, [3, 4], 5];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, flatten($testData));

        $testData = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, flatten($testData));

        $testData = [];
        $expected = [];
        $this->assertEquals($expected, flatten($testData));
    }
}