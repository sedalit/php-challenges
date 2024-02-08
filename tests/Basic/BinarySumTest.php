<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\BinarySum\binarySum;

class BinarySumTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            ["10", "1", "11"],
            ["1101", "101", "10010"],
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testBinarySum(string $first, string $second, string $expected) : void
    {
        $this->assertEquals($expected, binarySum($first, $second));
    }
}