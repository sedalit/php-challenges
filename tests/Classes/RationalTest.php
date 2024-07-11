<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Rational;

class RationalTest extends TestCase {

    public function testRational() : void
    {
        $rational = new Rational(1, 3);

        $this->assertEquals(1, $rational->getNumer());
        $this->assertEquals(3, $rational->getDelimeter());
    }

    public function testAdd() : void
    {
        $rational1 = new Rational(1, 3);
        $rational2 = new Rational(2, 5);

        $expected = new Rational(3, 8);

        $this->assertEquals($expected, $rational1->add($rational2));
    }

    public function testSub() : void
    {
        $rational1 = new Rational(4, 6);
        $rational2 = new Rational(1, 2);

        $expected = new Rational(3, 4);

        $this->assertEquals($expected, $rational1->sub($rational2));
    }
}