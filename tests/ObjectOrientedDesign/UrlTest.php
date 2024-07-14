<?php

namespace Tests\ObjectOrientedDesign;

use PHPUnit\Framework\TestCase;
use App\ObjectOrientedDesign\Url;

class UrlTest extends TestCase {

    public function testGetScheme() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar&bazz=gazz');

        $this->assertEquals('https', $url->getScheme());
    }

    public function testGetHost() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar&bazz=gazz');

        $this->assertEquals('www.google.ru', $url->getHost());
    }

    public function testGetPath() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar&bazz=gazz');

        $this->assertEquals('/hello.php', $url->getPath());
    }

    public function testGetQueryParams1() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar&bazz=gazz');
        $expected = [
            'foo' => 'bar',
            'bazz' => 'gazz'
        ];

        $this->assertEquals($expected, $url->getQueryParams());
    }

    public function testGetQueryParams2() : void
    {
        $url = new Url('https://www.google.ru/hello.php');

        $this->assertEquals([], $url->getQueryParams());
    }

    public function testGetQueryParam1() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar&bazz=gazz');

        $this->assertEquals('bar', $url->getQueryParam('foo'));
    }

    public function testGetQueryParam2() : void
    {
        $url = new Url('https://www.google.ru/hello.php');

        $this->assertEquals(null, $url->getQueryParam('foo'));
    }

    public function testGetQueryParam3() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=42');

        $this->assertEquals('42', $url->getQueryParam('foo'));
    }

    public function testEquals() : void
    {
        $url = new Url('https://www.google.ru/hello.php?foo=bar');
        $result = $url->equals(new Url('https://www.google.ru/hello.php?foo=bar'));

        $this->assertTrue($result);

        $result = $url->equals(new Url('https://www.google.ru/hello.php'));
        $this->assertFalse($result);
    }
}