<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Timer;

class TimerTest extends TestCase {

    public function testTimer() : void 
    {
        $timer = new Timer(60);

        $this->assertEquals(60, $timer->getSecondsCount());

        $timer->tick();

        $this->assertEquals(59, $timer->getSecondsCount());

        $timer = new Timer(30, 1);

        $this->assertEquals(90, $timer->getSecondsCount());

        $timer->tick();

        $this->assertEquals(89, $timer->getSecondsCount());

        $timer = new Timer(8, 20, 8);

        $this->assertEquals(30008, $timer->getSecondsCount());

        $timer->tick();

        $this->assertEquals(30007, $timer->getSecondsCount());
    }
}