<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\makeRational;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\getNumer;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\getDenom;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\rationalToString;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\add;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\sub;
use function Sedalit\PhpChallenges\DataAbstraction\Rational\gcd;

class RationalTest extends TestCase {

    public function testMakeRational1() : void
    {
        $expected = ['numer' => 4, 'denom' => 5];
        $this->assertEquals($expected, makeRational(4, 5));
    }

    public function testMakeRational2() : void
    {
        $expected = ['numer' => 1, 'denom' => 2];
        $this->assertEquals($expected, makeRational(3, 6));
    }

    public function testGetNumer1() : void
    {
        $rational = makeRational(4, 5);
        $this->assertEquals(4, getNumer($rational));
    }

    public function testGetNumer2() : void
    {
        $rational = makeRational(3, 6);
        $this->assertEquals(1, getNumer($rational));
    }

    public function testGetDenom1() : void
    {
        $rational = makeRational(4, 5);
        $this->assertEquals(5, getDenom($rational));
    }

    public function testGetDenom2() : void
    {
        $rational = makeRational(3, 6);
        $this->assertEquals(2, getDenom($rational));
    }

    public function testRationalToString1() : void
    {
        $rational = makeRational(4, 5);
        $this->assertEquals('4/5', rationalToString($rational));
    }

    public function testRationalToString2() : void
    {
        $rational = makeRational(3, 6);
        $this->assertEquals('1/2', rationalToString($rational));
    }

    public function testAdd() : void
    {
        $rational1 = makeRational(1, 2);
        $rational2 = makeRational(1, 3);

        $expected = [
            'numer' => 5,
            'denom' => 6
        ];

        $this->assertEquals($expected, add($rational1, $rational2));
    }

    public function testSub() : void
    {
        $rational1 = makeRational(1, 2);
        $rational2 = makeRational(1, 3);

        $expected = [
            'numer' => 1,
            'denom' => 6
        ];

        $this->assertEquals($expected, sub($rational1, $rational2));
    }

    public function testGcd1() : void
    {
        $this->assertEquals(2, gcd(2, 4));
    }

    public function testGcd2() : void
    {
        $this->assertEquals(1, gcd(3, 4));
    }
}