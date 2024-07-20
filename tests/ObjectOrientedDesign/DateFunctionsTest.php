<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use function App\ObjectOrientedDesign\DateFunctions\buildRange;

class DateFunctionsTest extends TestCase {

    public function testBuildRange() : void
    {
        $dates = [
            [ 'value' => 14, 'date' => '02.08.2018' ],
            [ 'value' => 43, 'date' => '03.08.2018' ],
            [ 'value' => 38, 'date' => '05.08.2018' ],
          ];
          $beginDate = '2018-08-01';
          $endDate = '2018-08-10';
          $expected = [
            [ 'value' => 0, 'date' => '01.08.2018' ],
            [ 'value' => 14, 'date' => '02.08.2018' ],
            [ 'value' => 43, 'date' => '03.08.2018' ],
            [ 'value' => 0, 'date' => '04.08.2018' ],
            [ 'value' => 38, 'date' => '05.08.2018' ],
            [ 'value' => 0, 'date' => '06.08.2018' ],
            [ 'value' => 0, 'date' => '07.08.2018' ],
            [ 'value' => 0, 'date' => '08.08.2018' ],
            [ 'value' => 0, 'date' => '09.08.2018' ],
            [ 'value' => 0, 'date' => '10.08.2018' ],
          ];
  
          $actual = buildRange($dates, $beginDate, $endDate);
          $this->assertEquals($expected, $actual);
    }
}