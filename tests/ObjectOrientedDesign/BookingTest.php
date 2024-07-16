<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Booking;

class BookingTest extends TestCase {

    public function testBook() : void
    {
        $booking = new Booking();

        $this->assertTrue($booking->tryBook('11-11-2008', '13-11-2008'));
        $this->assertFalse($booking->tryBook('12-11-2008', '12-11-2008'));
        $this->assertFalse($booking->tryBook('10-11-2008', '12-11-2008'));
        $this->assertFalse($booking->tryBook('12-11-2008', '14-11-2008'));
        $this->assertTrue($booking->tryBook('10-11-2008', '11-11-2008'));
        $this->assertTrue($booking->tryBook('13-11-2008', '14-11-2008'));
    }
}