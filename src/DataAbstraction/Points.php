<?php

namespace Sedalit\PhpChallenges\DataAbstraction\Points;

/**
 * Функция, возвращающая представление точки на координатной плоскости.
 */
function makeDekartPoint(float $x, float $y) : array
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

function getX(array $point) : float
{
    return $point['x'];
}

function getY(array $point) : float
{
    return $point['y'];
}