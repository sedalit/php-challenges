<?php

namespace Sedalit\PhpChallenges\DataAbstraction\Rectangle;

use function Sedalit\PhpChallenges\DataAbstraction\Points\makeDekartPoint;

function makeRectangle(array $topLeftPoint, float $width, float $height) : array
{
    $topRightPoint = makeDekartPoint($topLeftPoint['x'] + $width, $topLeftPoint['y']);
    $bottomLeftPoint = makeDekartPoint($topLeftPoint['x'], $topLeftPoint['y'] - $height);
    $bottomRightPoint = makeDekartPoint($topRightPoint['x'], $topRightPoint['y'] - $height);

    return [
        'points' => [
            'topLeft' => $topLeftPoint,
            'topRight' => $topRightPoint,
            'bottomLeft' => $bottomLeftPoint,
            'bottomRight' => $bottomRightPoint
        ],
        'startPoint' => $topLeftPoint,
        'width' => $width,
        'height' => $height
    ];
}

function getStartPoint(array $rectangle) : array
{
    return $rectangle['startPoint'];
}

function getWidth(array $rectangle) : float
{
    return $rectangle['width'];
}

function getHeight(array $rectangle) : float
{
    return $rectangle['height'];
}

function containsOrigin(array $rectangle) : bool
{
    $points = $rectangle['points'];
    $topLeftPoint = $points['topLeft'];
    $bottomRightPoint = $points['bottomRight'];

    $center = makeDekartPoint(0, 0);

    $isXContains = ($center['x'] - $topLeftPoint['x']) * ($center['x'] - $bottomRightPoint['x']) < 0;
    $isYContains = ($center['y'] - $topLeftPoint['y']) * ($center['y'] - $bottomRightPoint['y']) < 0;

    return $isXContains && $isYContains;
}