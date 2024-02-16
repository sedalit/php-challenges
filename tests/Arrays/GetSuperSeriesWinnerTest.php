<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetSuperSeriesWinner\getSuperSeriesWinner;

class GetSuperSeriesWinnerTest extends TestCase {
    protected static $winFirst = [
        [3, 7],
        [4, 1], 
        [4, 4],
        [3, 5],
        [4, 5],
        [3, 2],
        [4, 3],
        [6, 5],
    ];
    protected static $winSecond = [
        [3, 7],
        [4, 1], 
        [4, 4],
        [3, 5],
        [4, 5],
        [3, 2],
        [4, 3],
        [6, 7],
    ];
    protected static $draw = [
        [3, 7],
        [4, 1], 
        [4, 4],
        [3, 5],
        [4, 5],
        [3, 2],
        [4, 3],
        [6, 6],
    ];

    public static function additionProvider() : array
    {
        return [
            [self::$winFirst, 'first'],
            [self::$winSecond, 'second'],
            [self::$draw, 'draw']
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testGetSuperSeriesWinner(array $games, string $expected) : void
    {
        $this->assertEquals($expected, getSuperSeriesWinner($games));
    }
}