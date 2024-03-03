<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\PickFromArray\pickFromArray;

class PickFromArrayTest extends TestCase {
    public function testPickFromArray() : void
    {
        $data = [
            'user' => 'ubuntu',
            'cores' => 4,
            'os' => 'linux',
            'null' => null
        ];
        $keys = ['user'];
        $expected = ['user' => 'ubuntu'];

        $this->assertEquals($expected, pickFromArray($data, $keys));

        $keys = ['user', 'os'];
        $expected = ['user' => 'ubuntu', 'os' => 'linux'];

        $this->assertEquals($expected, pickFromArray($data, $keys));

        $keys = [];
        $expected = [];

        $this->assertEquals($expected, pickFromArray($data, $keys));

        $keys = ['none'];
        $expected = [];

        $this->assertEquals($expected, pickFromArray($data, $keys));

        $keys = ['null'];
        $expected = ['null' => null];

        $this->assertEquals($expected, pickFromArray($data, $keys));
    }   
}