<?php

namespace Tests\Basic;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Basic\IsHappyTicket\isHappyTicket;

class IsHappyTicketTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            ['00', true],
            ['123321', true],
            ['2356', false],
            ['198567', true],
            ['243542', false]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testIsPerfectNumber(string $ticketNumber, bool $expected) : void
    {
        $this->assertEquals($expected, isHappyTicket($ticketNumber));
    }
}