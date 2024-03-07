<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\Scrabble\scrabble;

class ScrabbleTest extends TestCase {
    public function testScrabble() : void
    {
        $chars = "rkqodlw";
        $word = "world";
        $expected = true;

        $this->assertEquals($expected, scrabble($chars, $word));

        $chars = "avj";
        $word = "java";
        $expected = false;

        $this->assertEquals($expected, scrabble($chars, $word));

        $chars = "avjafff";
        $word = "java";
        $expected = true;

        $this->assertEquals($expected, scrabble($chars, $word));

        $chars = "";
        $word = "java";
        $expected = false;

        $this->assertEquals($expected, scrabble($chars, $word));
    }
}