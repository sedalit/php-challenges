<?php

namespace App\Classes;

/**
 * Класс, описывающий объект круга
 */
class Circle {
    protected const PI = 3.14;
    protected $radius;

    public function __construct(float $radius) 
    {
        $this->radius = $radius;
    }

    /**
     * Функция вычисления площади круга
     * @return float
     */
    public function getArea() : float
    {
        return self::PI * pow($this->radius, 2);
    }

    /**
     * Функция вычисления длины окружности
     * @return float
     */
    public function getCircumference() : float
    {
        return round(2 * self::PI * $this->radius, 1);
    }

}