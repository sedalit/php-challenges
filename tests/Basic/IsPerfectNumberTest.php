<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\IsPerfectNumber\isPerfectNumber;

class IsPerfectNumberTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [0, false],
            [1, false],
            [6, true],
            [12, false],
            [28, true],
            [496, true]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsPerfectNumber(int $number, bool $expected) : void
    {
        $this->assertEquals($expected, isPerfectNumber($number));
    }
}