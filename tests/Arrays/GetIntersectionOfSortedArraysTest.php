<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetIntersectionOfSortedArrays\getIntersectionOfSortedArrays;

class GetIntersectionOfSortedArraysTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            [[10, 11, 24], [10, 13, 14, 18, 24, 30], [10, 24]],
            [[10, 11, 24], [-2, 3, 4], []],
            [[], [1], []]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testGetIntersectionOfSortedArrays(array $first, array $second, array $expected) : void
    {
        $this->assertEquals($expected, getIntersectionOfSortedArrays($first, $second));
    }
}