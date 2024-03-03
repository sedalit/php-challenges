<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\Exchange\exchange;

class ExchangeTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [[1, 2, 3], 1, [3, 2, 1]],
            [[1, 2, 3], 0, [1, 2, 3]],
            [['a', 'b', 'c', 'd'], 2, ['a', 'd', 'c', 'b']]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testExchange(array $array, int $index, array $expected) : void
    {
        $this->assertEquals($expected, exchange($array, $index));
    }
}