<?php

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\LengthOfLastWord\lengthOfLastWord;

class LengthOfLastWordTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            ["  Hello World!   ", 6],
            ["", 0],
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testLengthOfLastWordTest(string $string, int $expected) : void
    {
        $this->assertEquals($expected, lengthOfLastWord($string));
    }
}