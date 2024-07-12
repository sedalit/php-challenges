<?php

namespace Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Node;

class NodeTest extends TestCase {

    public function testGetKey() : void
    {
        $node = new Node(1);

        $this->assertEquals(1, $node->getKey());
    }

    public function testGetLeft1() : void
    {
        $leftNode = new Node(4);
        $node = new Node(9, $leftNode);

        $this->assertEquals($leftNode, $node->getLeft());
    }

    public function testGetLeft2() : void
    {
        $node = new Node(9);

        $this->assertEquals(null, $node->getLeft());
    }

    public function testSearchNode1() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(3),
                new Node(
                    6,
                    new Node(5),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    new Node(20),
                    null
                )
            )
        );

        $node = $tree->searchNode(6);

        $this->assertEquals(6, $node->getKey());
        $this->assertEquals(5, $node->getLeft()->getKey());
        $this->assertEquals(7, $node->getRight()->getKey());
    }

    public function testSearchNode2() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(3),
                new Node(
                    6,
                    new Node(5),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    new Node(20),
                    null
                )
            )
        );

        $node = $tree->searchNode(35);

        $this->assertEquals(null, $node);
    }

    public function testSearchNode3() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(3),
                new Node(
                    6,
                    new Node(5),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    new Node(20),
                    null
                )
            )
        );

        $node = $tree->searchNode(3)->getLeft();

        $this->assertEquals(null, $node);
    }
}