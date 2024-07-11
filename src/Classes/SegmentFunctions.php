<?php

namespace App\Classes\SegmentFunctions;
use App\Classes\Segment;

/**
 * Фунция, которая принимает на вход отрезок и возвращает новый отрезок с точками, добавленными в обратном порядке.
 * @param \App\Classes\Segment $segment
 * @return \App\Classes\Segment
 */
function reverse(Segment $segment) : Segment
{
    return new Segment($segment->getEndPoint(), $segment->getBeginPoint());
}