<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\IsContinuousSequence\isContinuousSequence;

class IsContinuousSequenceTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [[1, 2, 3, 4], true],
            [[4, 5, 6], true],
            [[], false],
            [[1], false]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsContinuousSequence(array $array, bool $expected) : void
    {
        $this->assertEquals($expected, isContinuousSequence($array));
    }
}