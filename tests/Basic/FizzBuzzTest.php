<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\FizzBuzz\fizzBuzz;

class FizzBuzzTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [11, 20, '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz'],
            [20, 1, ''],
            [1, 12, '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz']
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testFizzBuzz(int $begin, int $end, string $expected) : void
    {
        $this->assertEquals($expected, fizzBuzz($begin, $end));
    }
}