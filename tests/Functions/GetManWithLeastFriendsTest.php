<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\GetManWithLeastFriends\getManWithLeastFriends;

class GetManWithLeastFriendsTest extends TestCase {

    public function testGetManWithLeastFriends() : void
    {
        $users = [
            ['name' => 'Tirion', 'friends' => [
                ['name' => 'Mira', 'gender' => 'female'],
                ['name' => 'Ramsey', 'gender' => 'male']
            ]],
            ['name' => 'Bronn', 'friends' => []],
            ['name' => 'Sam', 'friends' => [
                ['name' => 'Aria', 'gender' => 'female'],
                ['name' => 'Keit', 'gender' => 'female']
            ]],
            ['name' => 'Keit', 'friends' => []],
            ['name' => 'Rob', 'friends' => [
                ['name' => 'Taywin', 'gender' => 'male']
            ]],
        ];
        $expected = ['name' => 'Keit', 'friends' => []];

        $this->assertEquals($expected, getManWithLeastFriends($users));

        $users = [];
        $expected = [];

        $this->assertEquals($expected, getManWithLeastFriends($users));
    }
}