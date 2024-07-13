<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Deck;
use App\ObjectOrientedDesign\Card;

class DeckTest extends TestCase {
    public function testDeck() : void
    {
        $deck = new Deck([
            ['suit' => 'black', 'value' => 6],
            ['suit' => 'black', 'value' => 7],
            ['suit' => 'black', 'value' => 8],
            ['suit' => 'red', 'value' => 6],
            ['suit' => 'red', 'value' => 7],
            ['suit' => 'red', 'value' => 8],
        ]);

        $expected = collect([
            new Card('black', 6),
            new Card('black', 7),
            new Card('black', 8),
            new Card('red', 6),
            new Card('red', 7),
            new Card('red', 8)
        ]);

        $this->assertEquals($expected, $deck->getCards());
    }
    public function testShuffle() : void
    {
        $deck = new Deck([
            ['suit' => 'black', 'value' => 6],
            ['suit' => 'black', 'value' => 7],
            ['suit' => 'black', 'value' => 8],
            ['suit' => 'red', 'value' => 6],
            ['suit' => 'red', 'value' => 7],
            ['suit' => 'red', 'value' => 8],
        ]);

        $shuffle = $deck->getShuffled();

        $this->assertNotEquals($shuffle, $deck->getShuffled());
    }
}