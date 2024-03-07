<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\CheckIfBalanced\checkIfBalanced;
use function Sedalit\PhpChallenges\Arrays\CheckIfBalanced\checkIfBalancedSimple;

class CheckIfBalancedTest extends TestCase {

    public static function additionProvider() : array
    {
        return [
            ['(5 + 6) * (7 + 8)/(4 + 3)', true],
            ['(4 + 3))', false]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testCheckIfBalanced(string $expression, bool $expected) : void
    {
        $this->assertEquals($expected, checkIfBalanced($expression));
        $this->assertEquals($expected, checkIfBalancedSimple($expression));
    }
}