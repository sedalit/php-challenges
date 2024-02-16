<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\MakeCensored\makeCensored;

class MakeCensoredTest extends TestCase {
    public static function additionProvider() : array
    {
        return [
            ["When you play the game of thrones, you win or you die", ['die', 'play'], "When you $#%! the game of thrones, you win or you $#%!"],
            ["chicken chicken? chicken! chicken", ['?', 'chicken'], "$#%! chicken? chicken! $#%!"],
            ["Hello, World!", ['foo', 'bar'], "Hello, World!"],
            ["", ['baz', 'gaz'], ""]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testMakeCensored(string $text, array $wordsToCensor, string $expected) : void
    {
        $this->assertEquals($expected, makeCensored($text, $wordsToCensor));
    }
}