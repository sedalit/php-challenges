<?php

namespace Tests\Functions;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Functions\GetFreeDomainsCount\getFreeDomainsCount;

class GetFreeDomainsCountTest extends TestCase {

    public function testGetFreeDomainsCount() : void
    {
        $emails = [
            'info@gmail.com',
            'info@yandex.ru',
            'info@hotmail.com',
            'mk@host.com',
            'support@myCompany.io',
            'key@yandex.ru',
            'sergey@gmail.com',
            'vovan@gmail.com',
            'vovan@hotmail.com'
        ];
        
        $expected = [
            'gmail.com' => 3,
            'yandex.ru' => 2,
            'hotmail.com' => 2
        ];

        $this->assertEquals($expected, getFreeDomainsCount($emails));

        $emails = [];
        $expected = [];

        $this->assertEquals($expected, getFreeDomainsCount($emails));
    }
}