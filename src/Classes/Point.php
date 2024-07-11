<?php

namespace App\Classes;

/**
 * Точка на координатной плоскости
 */
class Point {

    /**
     * Координата оси Х
     * @var float
     */
    protected $x;

    /**
     * Координата оси Y
     * @var float
     */
    protected $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString() 
    {
        return "({$this->x}, {$this->y})";
    }

    public function getX() : float 
    {
        return $this->x;
    }

    public function getY() : float
    {
        return $this->y;
    }

}