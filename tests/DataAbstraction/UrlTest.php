<?php

namespace Tests\DataAbstraction;

use PHPUnit\Framework\TestCase;
use Sedalit\PhpChallenges\DataAbstraction\Url;

class UrlTest extends TestCase {
    public function testMake1() : void
    {
        $url = Url\make('https://google.com/hello?foo=bar');
        $expected = 'https://google.com/hello?foo=bar';

        $this->assertEquals($expected, Url\toString($url));
    }

    public function testMake2() : void
    {
        $url = Url\make('google.com/hello?foo=bar');
        $expected = 'google.com/hello?foo=bar';

        $this->assertEquals($expected, Url\toString($url));
    }

    public function testMake3() : void
    {
        $url = Url\make('google.com/hello');
        $expected = 'google.com/hello';

        $this->assertEquals($expected, Url\toString($url));
    }

    public function testSetScheme1() : void
    {
        $url = Url\make('http://google.com');
        $changed = Url\setScheme($url, 'https');

        $this->assertEquals('https://google.com', Url\toString($changed));
    }

    public function testSetScheme2() : void
    {
        $url = Url\make('google.com');
        $changed = Url\setScheme($url, 'https');

        $this->assertEquals('https://google.com', Url\toString($changed));
    }

    public function testGetScheme1() : void
    {
        $url = Url\make('https://google.com');
        $this->assertEquals('https', Url\getScheme($url));
    }

    public function testGetScheme2() : void
    {
        $url = Url\make('google.com');
        $this->assertEquals('', Url\getScheme($url));
    }

    public function testSetHost1() : void
    {
        $url = Url\make('https://google.com');
        $changed = Url\setHost($url, 'foo.ru');

        $this->assertEquals('https://foo.ru', Url\toString($changed));
    }

    public function testSetHost2() : void
    {
        $url = Url\make('https://');
        $changed = Url\setHost($url, 'fizz.buzz');

        $this->assertEquals('fizz.buzz', Url\toString($changed));
    }

    public function testGetHost1() : void
    {
        $url = Url\make('https://google.com');

        $this->assertEquals('google.com', Url\getHost($url));
    }

    public function testGetHost2() : void
    {
        $url = Url\make('https://');

        $this->assertEquals('', Url\getHost($url));
    }

    public function testSetPath1() : void
    {
        $url = Url\make('https://google.com/hello');
        $changed = Url\setPath($url, '/bye');

        $this->assertEquals('https://google.com/bye', Url\toString($changed));
    }

    public function testSetPath2() : void
    {
        $url = Url\make('https://google.com');
        $changed = Url\setPath($url, '/hello');

        $this->assertEquals('https://google.com/hello', Url\toString($changed));
    }

    public function testSetQueryParam1() : void
    {
        $url = Url\make('https://google.com/hello?foo=bar');
        $changed = Url\setQueryParam($url, 'baz', 'gaz');

        $this->assertEquals('https://google.com/hello?foo=bar&baz=gaz', Url\toString($changed));
    }

    public function testSetQueryParam2() : void
    {
        $url = Url\make('https://google.com/hello');
        $changed = Url\setQueryParam($url, 'foo', 'bar');

        $this->assertEquals('https://google.com/hello?foo=bar', Url\toString($changed));
    }

    public function testGetQueryParam1() : void
    {
        $url = Url\make('https://google.com/hello?foo=bar');

        $this->assertEquals('bar', Url\getQueryParam($url, 'foo'));
    }

    public function testGetQueryParam2() : void
    {
        $url = Url\make('https://google.com/hello');

        $this->assertEquals(null, Url\getQueryParam($url, 'foo'));
    }
}