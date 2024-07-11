<?php

namespace App\Classes;

use App\Classes\Point;

/**
 * Отрезок на координатной плоскости
 */
class Segment {
    /**
     * Точка начала отрезка
     * @var Point
     */
    protected $beginPoint;

    /**
     * Точка конца отрезка
     * @var Point
     */
    protected $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint) 
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function __toString() 
    {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }

    public function getBeginPoint() : Point
    {
        return $this->beginPoint;
    }

    public function getEndPoint() : Point
    {
        return $this->endPoint;
    }
}