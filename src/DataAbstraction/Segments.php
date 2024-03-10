<?php

namespace Sedalit\PhpChallenges\DataAbstraction\Segments;

use function Sedalit\PhpChallenges\DataAbstraction\Points\makeDekartPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Points\getX;
use function Sedalit\PhpChallenges\DataAbstraction\Points\getY;

function makeSegment(array $point1, array $point2) : array
{
    return [
        'start' => $point1,
        'end' => $point2
    ];
}

function getBeginPoint(array $segment) : array
{
    return $segment['start'];
}

function getEndPoint(array $segment) : array
{
    return $segment['end'];
}

function getMidpointOfSegment(array $segment) : array
{
    $start = getBeginPoint($segment);
    $end = getEndPoint($segment);

    $x = (getX($start) + getX($end)) / 2;
    $y = (getY($start) + getY($end)) / 2;
    
    return makeDekartPoint($x, $y);
}