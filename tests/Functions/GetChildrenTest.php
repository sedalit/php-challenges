<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\GetChildren\getChildren;

class GetChildrenTest extends TestCase {

    public function testGetChildren() : void
    {
        $users = [
            ['name' => 'Tirion', 'children' => [
                ['name' => 'Mira', 'birdhday' => '1983-03-23']
            ]],
            ['name' => 'Bronn', 'children' => []],
            ['name' => 'Sam', 'children' => [
                ['name' => 'Aria', 'birdhday' => '2012-11-03'],
                ['name' => 'Keit', 'birdhday' => '1933-05-14']
            ]],
            ['name' => 'Rob', 'children' => [
                ['name' => 'Tisha', 'birdhday' => '2012-11-03']
            ]],
        ];
        $expected = [
            ['name' => 'Mira', 'birdhday' => '1983-03-23'],
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14'],
            ['name' => 'Tisha', 'birdhday' => '2012-11-03']
        ];

        $this->assertEquals($expected, getChildren($users));

        $users = [];
        $expected = [];

        $this->assertEquals($expected, getChildren($users));
    }
}