<?php

namespace Sedalit\PhpChallenges\Arrays\GetTheNearestLocation;

/**
 * Функция, которая находит место ближайшее к указанной точке на карте и возвращает его.
 * Условием задачи является реализация функции без использования обращений к элементам массива по индексу.
 * @param array $locations  Массив мест на карте. Каждое место это массив из двух элементов, где первый элемент это название места, второй – точка на карте (массив из двух чисел x и y).
 * @param array $currentPoint Текущая точка на карте. Массив из двух элементов-координат x и y.
 */
function getTheNearestLocation(array $locations, array $currentPoint) : array
{
    $result = [];
    $previousDistance = PHP_INT_MAX;

    foreach ($locations as [$name, $points]) {
        $distance = getDistance($points, $currentPoint);
        if ($distance < $previousDistance) {
            $result = [$name, $points]; 
            $previousDistance = $distance;
        }
    }
 
    return $result;
}

/**
 * Функция, возвращающая дистанцию между двумя точакми.
 * @param array $first Точка от которой нужно рассчитать дистанцию. Массив из двух элементов-координат x и y.
 * @param array $second Точка для которой нужно рассчитать дистанцию. Массив из двух элементов-координат x и y.
 */
function getDistance(array $first, array $second) : float
{
    [$firstX, $firstY] = $first;
    [$secondX, $secondY] = $second;

    $x = $firstX - $secondX;
    $y = $firstY - $secondY;

    return abs($x) + abs($y);
}