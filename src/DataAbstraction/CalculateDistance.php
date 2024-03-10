<?php

namespace Sedalit\PhpChallenges\DataAbstraction\CalculateDistance;

/**
 * Функция, находящая расстояние между двумя точками на координатной плоскости.
 * @param array $firstPoint Массив, отражающий положение точки [x1, y1]
 * @param array $secondPoint Массив, отражающий положение точки [x2, y2]
 */
function calculateDistance(array $firstPoint, array $secondPoint) : float
{
    [$x1, $y1] = $firstPoint;
    [$x2, $y2] = $secondPoint;

    $x = pow($x2 - $x1, 2);
    $y = pow($y2 - $y1, 2);

    return sqrt($x + $y);
}