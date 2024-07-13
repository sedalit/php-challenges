<?php

namespace App\ObjectOrientedDesign;

/**
 * Класс, описывающий объект игральной карты
 */
class Card {
    /**
     * Карточная масть
     * @var string
     */
    protected $suit;

    /**
     * Номинал карты
     * @var int
     */
    protected $value;

    public function __construct(string $suit, int $value) 
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getSuit() : string
    {
        return $this->suit;
    }

    public function getValue() : int
    {
        return $this->value;
    }
}