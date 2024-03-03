<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\FromPairs\fromPairs;

class FromPairsTest extends TestCase {
    public function testFromPairs() : void
    {
        $data = [['cat', 5], ['dog', 6], ['cat', 11]];
        $expected = ['cat' => 11, 'dog' => 6];

        $this->assertEquals($expected, fromPairs($data));

        $data = [['fred', 30], ['barney', 40]];
        $expected = ['fred' => 30, 'barney' => 40];

        $this->assertEquals($expected, fromPairs($data));
    }
}