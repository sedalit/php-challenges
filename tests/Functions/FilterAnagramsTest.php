<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\FilterAnagrams\filterAnagrams;

class FilterAnagramsTest extends TestCase {
    
    public function testFilterAnagram1() : void
    {
        $word = 'abba';
        $anagrams = ['aabb', 'abcd', 'bbaa', 'dada'];
        $expected = ['aabb', 'bbaa'];

        $this->assertEquals($expected, filterAnagrams($word, $anagrams));
    }

    public function testFilterAnagram2() : void
    {
        $word = 'racer';
        $anagrams = ['crazer', 'carer', 'racar', 'caers', 'racer'];
        $expected = ['carer', 'racer'];

        $this->assertEquals($expected, filterAnagrams($word, $anagrams));
    }

    public function testFilterAnagram3() : void
    {
        $word = 'laser';
        $anagrams = ['lazing', 'lazy',  'lacer'];
        $expected = [];

        $this->assertEquals($expected, filterAnagrams($word, $anagrams));
    }
}