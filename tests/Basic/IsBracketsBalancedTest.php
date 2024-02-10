<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\IsBracketsBalanced\isBracketsBalancedRegexp;
use function Sedalit\PhpChallenges\Basic\IsBracketsBalanced\isBracketsBalancedStack;

class IsBracketsBalancedTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            ['{}', true],
            ['(}', false],
            ['{()}]', false],
            ['({[}])', false],
            ['()[]{}', true],
            ['(]', false]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsBracketsBalancedRegexp(string $brackets, bool $expected) : void
    {
        $this->assertEquals($expected, isBracketsBalancedRegexp($brackets));
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsBracketsBalancedStack(string $brackets, bool $expected) : void
    {
        $this->assertEquals($expected, isBracketsBalancedStack($brackets));
    }
}