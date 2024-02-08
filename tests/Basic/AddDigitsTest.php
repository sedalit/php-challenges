<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\AddDigits\addDigits;

class AddDigitsTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [0, 0],
            [10, 1],
            [13, 4],
            [26, 8]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAddDigits(int $number, int $expected) : void
    {
        $this->assertEquals($expected, addDigits($number));
    }
}