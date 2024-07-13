<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use function App\ObjectOrientedDesign\Comparator\compare;

class ComparatorTest extends TestCase {

    public function testComparator() : void
    {
        $this->assertEquals(true, compare('ab#c', 'ab#c'));
        $this->assertEquals(true, compare('ab##', 'c#d#'));
        $this->assertEquals(false, compare('a#c', 'b'));
        $this->assertEquals(true, compare('#cd', 'cd'));
        $this->assertEquals(true, compare('##', '##'));
        $this->assertEquals(false, compare('a#cd#', '#cee#'));
    }
}