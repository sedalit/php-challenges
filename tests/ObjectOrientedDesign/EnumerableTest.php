<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Enumerable;

class EnumerableTest extends TestCase {

    public function testWrap() : void
    {
        $elements = [
            ['key' => 'value', 'year' => 1932],
        ];

        $enumerable = Enumerable::wrap($elements);

        $this->assertEquals([['key' => 'value', 'year' => 1932]], $enumerable->all());
    }

    public function testWhere() : void
    {
        $elements = [
            ['key' => 'value', 'year' => 1932],
            ['key' => '', 'year' => 1100],
            ['key' => 'value', 'year' => 32]
        ];

        $coll = Enumerable::wrap($elements);
        $newColl = $coll->where('key', 'value')->where('year', 1932);
 
        $newColl->all(); 
        $this->assertEquals([['key' => 'value', 'year' => 1932]], $newColl->all());
    }
}