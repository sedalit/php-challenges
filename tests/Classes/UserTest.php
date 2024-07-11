<?php

namespace Tests\Classes;

use App\Classes\User;
use PHPUnit\Framework\TestCase;
use function App\Classes\UserFunctions\areUsersEqual;

class UserTest extends TestCase {
    
    public function testUser() : void
    {
        $user = new User(1);
        $expected = 1;

        $this->assertEquals($expected, $user->getId());
    }

    public function testAreUsersEqual() : void
    {
        $firstUser = new User(1);
        $secondUser = new User(2);

        $result = areUsersEqual($firstUser, $secondUser);

        $this->assertEquals(false, $result);

        $firstUser = new User(3);
        $secondUser = new User(3);

        $result = areUsersEqual($firstUser, $secondUser);

        $this->assertEquals(true, $result);
    }

    public function testComparable() : void
    {
        $firstUser = new User(1);
        $secondUser = new User(2);

        $this->assertEquals(false, $firstUser->compareTo($secondUser));

        $firstUser = new User(3);
        $secondUser = new User(3);

        $this->assertEquals(true, $firstUser->compareTo($secondUser));
    }
}