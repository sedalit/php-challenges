<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\Last\last;

class LastTest extends TestCase {

    public static function additionProvider() : array
    {
        return [
            ['hello', 'o'],
            ['0', '0'],
            ['', null]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testLast(string $string, $excepted) : void
    {
        $this->assertEquals($excepted, last($string));
    }
}