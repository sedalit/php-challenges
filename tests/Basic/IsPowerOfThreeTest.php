<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\IsPowerOfThree\isPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [9, true],
            [27, true],
            [81, true],
            [4, false],
            [1, true],
            [16, false]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsPowerOfThree(int $number, bool $expected) : void
    {
        $this->assertEquals($expected, isPowerOfThree($number));
    }
}