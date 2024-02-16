<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetSameParity\getSameParity;

class GetSameParityTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            [[1, 2, 3, 4, 5], [1, 3, 5]],
            [[2, 3, 4, 5, 6], [2, 4, 6]],
            [[], []],
            [[1], [1]]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testGetSameParity(array $array, array $expected) : void
    {
        $this->assertEquals($expected, getSameParity($array));
    }
}