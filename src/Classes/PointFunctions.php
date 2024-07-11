<?php

namespace App\Classes\PointFunctions;

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

/**
 * Функция, которая клонирует переданную точку. 
 * Под клонированием подразумевается процесс создания нового объекта, с такими же данными как и у старого.
 * @param \App\Classes\Point $point
 * @return \App\Classes\Point
 */
function duplicate(Point $point) : Point
{
    return new Point($point->getX(), $point->getY());
}