<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\TakeOldest\takeOldest;

class TakeOldestTest extends TestCase {

    public function testTakeOldest() : void
    {
        $users = [
            ['name' => 'Tirion', 'birthday' => '1988-11-19'],
            ['name' => 'Sam', 'birthday' => '1999-11-22'],
            ['name' => 'Rob', 'birthday' => '1975-01-11'],
            ['name' => 'Sansa', 'birthday' => '2001-03-20'],
            ['name' => 'Tisha', 'birthday' => '1992-02-27']
        ];
        $expected = ['name' => 'Rob', 'birthday' => '1975-01-11'];

        $this->assertEquals($expected, takeOldest($users));
    }
}