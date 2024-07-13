<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Notice;
use App\ObjectOrientedDesign\Converter;

class ConverterTest extends TestCase {
    
    public function testConverter() : void
    {
        $converter = new Converter(['foo' => 'bar']);
        $std = $converter->toStd();

        $this->assertEquals('bar', $std->foo);

        $this->expectException(Notice::class);
        $this->assertEquals(NULL, $std->bazz);
    }
}