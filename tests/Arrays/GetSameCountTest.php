<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetSameCount\getSameCount;

class GetSameCountTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            [[4, 4], [4, 4], 1],
            [[], [], 0],
            [[1, 10, 3], [10, 100, 35, 1], 2],
            [[1, 3, 2, 2], [3, 1, 1, 2], 3]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testGetSameCount(array $first, array $second, int $expected) : void
    {
        $this->assertEquals($expected, getSameCount($first, $second));
    }
}