<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\PickFromNestedArray\pickFromNestedArray;

class PickFromNestedArrayTest extends TestCase {
    public function testPickFromNestedArray() : void
    {
        $data = [
            'a' => [
                'b' => [
                    'c' => 'wow'
                ]
            ]
        ];
        $keys = ['c'];
        $expected = ['c' => 'wow'];
        $this->assertEquals($expected, pickFromNestedArray($data, $keys));

        $keys = ['b', 'c'];
        $expected = ['b' => ['c' => 'wow'], 'c' => 'wow'];
        $this->assertEquals($expected, pickFromNestedArray($data, $keys));
    }
}