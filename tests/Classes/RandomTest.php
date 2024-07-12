<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Random;

class RandomTest extends TestCase {

    public function testRandom() : void
    {
        $random = new Random(100);

        $result1 = $random->getNext();
        $result2 = $random->getNext();

        $this->assertEquals(false, $result1 === $result2);

        $random->reset();

        $result3 = $random->getNext();
        $result4 = $random->getNext();

        $this->assertEquals(true, $result1 === $result3);
        $this->assertEquals(true, $result2 === $result4);
    }
}