<?php

namespace App\Classes;

/**
 * Класс, описывающий узел двоичного дерева
 */
class Node {
    /**
     * Ключ узла
     * @var int
     */
    protected $key;

    /**
     * Левый ребёнок
     * @var Node
     */
    protected $leftChild = null;

    /**
     * Правый ребёнок
     * @var Node
     */
    protected $rightChild = null;

    public function __construct(int $key, Node $leftChild = null, Node $rightChild = null) 
    {
        $this->key = $key;
        $this->leftChild = $leftChild;
        $this->rightChild = $rightChild;
    }

    /**
     * Функция получения ключа текущего узла
     * @return int
     */
    public function getKey() : int
    {
        return $this->key;
    }

    public function getLeft() : ?Node
    {
        return $this->leftChild;
    }

    public function getRight() : ?Node
    {
        return $this->rightChild;
    }

    /**
     * Функция поиска узла по ключу
     * @param int $key
     * @return \App\Classes\Node|null
     */
    public function searchNode(int $key) : ?Node
    {
        if ($key === $this->key) {
            return $this;
        } else if ($key > $this->key) {
            return $this->rightChild != null ? $this->rightChild->searchNode($key) : null; 
        } else {
            return $this->leftChild != null ? $this->leftChild->searchNode($key) : null; 
        }
    }
}