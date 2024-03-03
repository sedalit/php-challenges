<?php

namespace Tests\Arrays;

use PHPUnit\Framework\TestCase;
use function Sedalit\PhpChallenges\Arrays\GetTotalAmount\getTotalAmount;

class GetTotalAmountTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'], 'usd', 16],
            [['jpy 15', 'eur 60', 'rub 30'], 'jpy', 15],
            [[], 'usd', 0],
            [[], '', 0]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testGetTotalAmount(array $array, string $currency, float $expected) : void
    {
        $this->assertEquals($expected, getTotalAmount($array, $currency));
    }
}