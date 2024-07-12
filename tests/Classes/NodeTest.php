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

    public function testInsertNode() : void
    {
        $tree = new Node();
        $tree->insertNode(9);

        $this->assertEquals(9, $tree->getKey());

        $tree->insertNode(17);

        $this->assertEquals(17, $tree->getRight()->getKey());

        $tree->insertNode(4);

        $this->assertEquals(4, $tree->getLeft()->getKey());

        $tree->insertNode(3);

        $this->assertEquals(3, $tree->getLeft()->getLeft()->getKey());

        $tree->insertNode(6);

        $this->assertEquals(6, $tree->getLeft()->getRight()->getKey());
    }

    public function testGetCount1() : void
    {
        $tree = new Node();

        $this->assertEquals(1, $tree->getCount());

        $tree->insertNode(9);
        $tree->insertNode(4);

        $this->assertEquals(2, $tree->getCount());

        $tree->insertNode(12);

        $this->assertEquals(3, $tree->getCount());
    }

    public function testGetCount2() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(8),
                new Node(
                    6,
                    new Node(3),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    null,
                    new Node(20)
                )
            )
        );

        $this->assertEquals(9, $tree->getCount());
    }

    public function testGetSum() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(8),
                new Node(
                    6,
                    new Node(3),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    null,
                    new Node(20)
                )
            )
        );

        $this->assertEquals(96, $tree->getSum());
    }

    public function testToArray() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(8),
                new Node(
                    6,
                    new Node(3),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    null,
                    new Node(20)
                )
            )
        );

        $expected = [9, 4, 8, 6, 3, 7, 17, 22, 20];

        $this->assertEquals($expected, $tree->toArray());
    }

    public function testToString() : void
    {
        $tree = new Node(
            9,
            new Node(
                4,
                new Node(8),
                new Node(
                    6,
                    new Node(3),
                    new Node(7)
                )
            ),
            new Node(
                17,
                null,
                new Node(
                    22,
                    null,
                    new Node(20)
                )
            )
        );

        $expected = '(9, 4, 8, 6, 3, 7, 17, 22, 20)';

        $this->assertEquals($expected, $tree->toString());
    }
}