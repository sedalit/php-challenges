<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\RollDice\rollDiceStatistics;
use function Sedalit\PhpChallenges\Functions\RollDice\rollDice;

class RollDiceStatisticsTest extends TestCase {

    public function testRollDiceStatistics1() : void
    {
        $expected = [
            1 => "#",
            2 => "####",
            3 => "#",
            4 => "###",
            5 => "",
            6 => "#"
        ];

        $this->assertEquals($expected, rollDiceStatistics(10, 0));
    }
}