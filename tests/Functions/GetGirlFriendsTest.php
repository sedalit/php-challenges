<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\GetGirlFriends\getGirlFriends;

class GetGirlFriendsTest extends TestCase {

    public function testGetGirlFriends() : void
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
            ['name' => 'Rob', 'friends' => [
                ['name' => 'Taywin', 'gender' => 'male']
            ]],
        ];
        $expected = [
            ['name' => 'Mira', 'gender' => 'female'],
            ['name' => 'Aria', 'gender' => 'female'],
            ['name' => 'Keit', 'gender' => 'female']
        ];

        $this->assertEquals($expected, getGirlFriends($users));

        $users = [];
        $expected = [];

        $this->assertEquals($expected, getGirlFriends($users));
    }
}