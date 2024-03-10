<?php

namespace Sedalit\PhpChallenges\DataAbstraction\GetMidpoint;

/**
 * Функцию, которая находит точку посередине между двумя указанными точками на координатной плоскости.
 */
function getMidpoint(array $point1, array $point2) : array
{
    return [
        'x' => ($point1['x'] + $point2['x']) / 2,
        'y' => ($point1['y'] + $point2['y']) / 2
    ];
}