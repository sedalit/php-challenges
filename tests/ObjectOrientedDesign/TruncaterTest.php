<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Truncater;

class TruncaterTest extends TestCase {

    public function testTruncate1() : void
    {
        $truncater = new Truncater();

        $actual = $truncater->truncate('one two');
        $this->assertEquals('one two', $actual);

        $actual = $truncater->truncate('one two', ['length' => 6]);
        $this->assertEquals('one tw...', $actual);
    }

    public function testTruncate2() : void
    {
        $truncater = new Truncater(['length' => 4, 'separator' => "......"]);

        $actual = $truncater->truncate('one two');
        $this->assertEquals('one ......', $actual);

        $actual = $truncater->truncate('one two', ['length' => 6]);
        $this->assertEquals('one tw......', $actual);
    }
}