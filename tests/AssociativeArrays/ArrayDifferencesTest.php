<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\ArrayDifferences\arrayDifferences;

class ArrayDifferencesTest extends TestCase {
    public function testArrayDifferences() : void
    {
        $first = ['one' => 'eon', 'two' => 'two', 'four' => true];
        $second = ['two' => 'own', 'zero' => 4, 'four' => true];
        $expected = [
            'one' => 'deleted',
            'two' => 'changed',
            'four' => 'unchanged',
            'zero' => 'added',
        ];

        $this->assertEquals($expected, arrayDifferences($first, $second));
    }
}