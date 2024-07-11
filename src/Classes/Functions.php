<?php

namespace App\Classes\Functions;

use App\Classes\Point;

/**
 * Функция, которая принимает на вход две точки (объекты) и возвращает точку (объект) лежащую между ними (поиск середины отрезка).
 * @param \App\Classes\Point $x
 * @param \App\Classes\Point $y
 * @return \App\Classes\Point
 */
function getMidpoint(Point $firstPoint, Point $secondPoint) : Point 
{
    return new Point(
        ($firstPoint->getX() + $secondPoint->getX()) / 2,
        ($firstPoint->getY() + $secondPoint->getY()) / 2,
    );
}