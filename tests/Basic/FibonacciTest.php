<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\Fibonacci\fibonacci;

class FibonacciTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [3, 2],
            [5, 5],
            [10, 55],
            [-2, 0]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testBinarySum(int $number, int $expected) : void
    {
        $this->assertEquals($expected, fibonacci($number));
    }
}