<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\AssociativeArrays\ToRna\toRna;

class ToRnaTest extends TestCase {
    public function testToRna() : void
    {
        $dna = 'ACGTGGTCTTAA';
        $expected = 'UGCACCAGAAUU';

        $this->assertEquals($expected, toRna($dna));
    }
}