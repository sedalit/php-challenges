<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Drunkard;

class DrunkardTest extends TestCase {

    public function testRun() : void
    {
        $drunkard = new Drunkard();
        $result = $drunkard->run([1], [2]);

        $this->assertEquals('Second player. Round: 1', $result);

        $result = $drunkard->run([2], [1]);
        $this->assertEquals('First player. Round: 1', $result);

        $result = $drunkard->run([1], [1]);
        $this->assertEquals('Botva!', $result);

        $result = $drunkard->run([1, 2], [3, 2]);
        $this->assertEquals('Second player. Round: 2', $result);

        $result = $drunkard->run([1, 3], [2, 1]);
        $this->assertEquals('First player. Round: 4', $result);
    }
}