<?php

namespace Tests\AssociativeArrays;

use PHPUnit\Framework\TestCase;

use function Sedalit\PhpChallenges\AssociativeArrays\Map\make;
use function Sedalit\PhpChallenges\AssociativeArrays\Map\get;
use function Sedalit\PhpChallenges\AssociativeArrays\Map\set;

class MapTest extends TestCase {
    public function testMap() : void
    {
        $map = make();
        $this->assertEquals(null, get($map, 'foo'));

        $this->assertEquals('foo', get($map, 'key', 'foo'));
        
        set($map, 'foo', 'bar');
        $this->assertEquals('bar', get($map, 'foo'));
        
        set($map, 'baz', 'gaz');
        $this->assertEquals('gaz', get($map, 'baz'));
    }

    public function testCollision() : void
    {
        $map = make();
        
        set($map, 'aaaaa0.462031558722291', 'foo');
        set($map, 'aaaaa0.0585754039730588', 'bar');

        $result = get($map, 'aaaaa0.462031558722291');
        $this->assertEquals('foo', $result);
        $result = get($map, 'aaaaa0.0585754039730588');
        $this->assertEquals('foo', $result);

        set($map, 'aaaaa0.462031558722291', 'baz');
        $result = get($map, 'aaaaa0.462031558722291');
        $this->assertEquals('baz', $result);
    }
}
