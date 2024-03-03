<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\ToRoman\toRoman;

class ToRomanTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            [15, 'XV'],
            [3, 'III'],
            [156, 'CLVI',],
            [0, ''],
            [-4, '']
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testToRoman(int $number, string $expected) : void
    {
        $this->assertEquals($expected, toRoman($number));
    }
}