<?php

namespace App\ObjectOrientedDesign;

use Tightenco\Collect\Support\Collection;
use App\ObjectOrientedDesign\Card;

/**
 * Класс, описывающий колоду игральных карт
 */
class Deck {
    /**
     * Коллекция игральных карт
     * @var \Tightenco\Collect\Support\Collection
     */
    protected $cards = [];

    public function __construct(array $cards) 
    {
        $this->cards = collect(
            array_map(function (array $card) {
                return new Card($card['suit'], $card['value']);
        }, $cards));
    }

    public function getCards() : Collection
    {
        return $this->cards;
    }

    public function getShuffled() : array
    {
        return $this->cards->shuffle()->all();
    }
}