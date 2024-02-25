<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\BubbleSort\bubbleSort;

class BubbleSortTest extends TestCase {

    public static function additionProvider() : array
    {
        return [
            [[15, 4, 6, 2, 1], [1, 2, 4, 6, 15]],
            [[], []],
            [[3, 10, 4, 3], [3, 3, 4, 10]]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testBubbleSort(array $array, array $expected) : void
    {
        $this->assertEquals($expected, bubbleSort($array));
    }
}