<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;

use function Sedalit\PhpChallenges\DataAbstraction\Points\makeDekartPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Rectangle\makeRectangle;
use function Sedalit\PhpChallenges\DataAbstraction\Rectangle\getStartPoint;
use function Sedalit\PhpChallenges\DataAbstraction\Rectangle\getHeight;
use function Sedalit\PhpChallenges\DataAbstraction\Rectangle\getWidth;
use function Sedalit\PhpChallenges\DataAbstraction\Rectangle\containsOrigin;

class RectangleTest extends TestCase {

    public function testRectangle() : void
    {
        $topLeft = makeDekartPoint(-4, 3);

        $expected = [
            'points' => [
                'topLeft' => [
                    'x' => -4,
                    'y' => 3
                ],
                'topRight' => [
                    'x' => 1,
                    'y' => 3,
                ],
                'bottomLeft' => [
                    'x' => -4,
                    'y' => -1
                ],
                'bottomRight' => [
                    'x' => 1,
                    'y' => -1
                ]
            ],
            'startPoint' => [
                'x' => -4,
                'y' => 3
            ],
            'width' => 5,
            'height' => 4
        ];

        $this->assertEquals($expected, makeRectangle($topLeft, 5, 4));
    }

    public function testStartPoint() : void
    {
        $topLeft = makeDekartPoint(-4, 3);
        $rectangle = makeRectangle($topLeft, 5, 4);
        $expected = ['x' => -4, 'y' => 3];

        $this->assertEquals($expected, getStartPoint($rectangle));
    }

    public function testGetWidth() : void
    {
        $topLeft = makeDekartPoint(-4, 3);
        $rectangle = makeRectangle($topLeft, 5, 4);
        $expected = 5;

        $this->assertEquals($expected, getWidth($rectangle));
    }

    public function testGetHeight() : void
    {
        $topLeft = makeDekartPoint(-4, 3);
        $rectangle = makeRectangle($topLeft, 5, 4);
        $expected = 4;

        $this->assertEquals($expected, getHeight($rectangle));
    }

    public function testContainsOrigin1() : void
    {
        $topLeft = makeDekartPoint(-4, 3);
        $rectangle = makeRectangle($topLeft, 5, 4);
        $expected = true;

        $this->assertEquals($expected, containsOrigin($rectangle));
    }

    public function testContainsOrigin2() : void
    {
        $topLeft = makeDekartPoint(0, 1);
        $rectangle = makeRectangle($topLeft, 4, 5);
        $expected = false;

        $this->assertEquals($expected, containsOrigin($rectangle));
    }
}
