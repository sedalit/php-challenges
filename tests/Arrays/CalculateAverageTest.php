<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\CalculateAverage\calculateAverage;

class CalculateAverageTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [[1, 2, 3, 4], 2.5],
            [[4, 5, 6], 5,],
            [[1], 1],
            [[], 0]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsContinuousSequence(array $array, float $expected) : void
    {
        $this->assertEquals($expected, calculateAverage($array));
    }
}