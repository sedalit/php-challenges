<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\FindWhere\findWhere;

class FindWhereTest extends TestCase {
    public function testFindWhere() : void
    {
        $data = [
            ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
            ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
            ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
            ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
            ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
            ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
        ];
        $search = ['author' => 'Shakespeare', 'year' => 1611];
        $expected = ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611];

        $this->assertEquals($expected, findWhere($data, $search));
    }
}