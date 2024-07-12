<?php

namespace App\Classes;

/**
 * Класс, описывающий узел двоичного дерева
 */
class Node {
    /**
     * Ключ узла
     * @var int|null
     */
    protected $key;

    /**
     * Левый ребёнок
     * @var Node|null
     */
    protected $leftChild = null;

    /**
     * Правый ребёнок
     * @var Node|null
     */
    protected $rightChild = null;

    public function __construct(int $key = null, Node $leftChild = null, Node $rightChild = null) 
    {
        $this->key = $key;
        $this->leftChild = $leftChild;
        $this->rightChild = $rightChild;
    }

    public function __toString() : string
    {
        return $this->key ?? '';
    }

    /**
     * Функция получения ключа текущего узла
     * @return int
     */
    public function getKey() : ?int
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
        switch ($key) {
            case $key === $this->key:
                return $this;

            case $key > $this->key:
                return $this->rightChild != null ? $this->rightChild->searchNode($key) : null; 

            case $key < $this->key:
                return $this->leftChild != null ? $this->leftChild->searchNode($key) : null; 
            
            default:
                return null;
        }
    }

    /**
     * Функция добавления узла в древо
     * @param int $key
     * @return void
     */
    public function insertNode(int $key) : void
    {
        switch ($this->key) {
            case null:
                $this->key = $key;
                break;

            case $key > $this->key:
                $this->rightChild != null ? $this->rightChild->insertNode($key) : $this->rightChild = new Node($key);
                break;

            case $key < $this->key:
                $this->leftChild != null ? $this->leftChild->insertNode($key) : $this->leftChild = new Node($key);
                break;
            
            default:
                break;
        }
    }

    /**
     * Вовзаращает количество узлов в дереве
     * @return int
     */
    public function getCount() : int
    {
        $count = 1;

        if ($this->leftChild) {
            $count += $this->leftChild->getCount();
        }

        if ($this->rightChild) {
            $count += $this->rightChild->getCount();
        }

        return $count;
    }

    /**
     * Возвращает сумму всех ключей дерева
     * @return int
     */
    public function getSum() : int
    {
        $sum = $this->key ?? 0;

        if ($this->leftChild) {
            $sum += $this->leftChild->getSum();
        }

        if ($this->rightChild) {
            $sum += $this->rightChild->getSum();
        }

        return $sum;
    }

    /**
     * Возвращает одномерный массив, содержащий все ключи дерева
     * @return array
     */
    public function toArray() : array
    {
        $result = $this->key != null ? [$this->key] : [];

        if ($this->leftChild) {
            $leftResut = $this->leftChild->toArray();

            $result = array_merge($result, $leftResut);
        } 

        if ($this->rightChild) {
            $rightResult = $this->rightChild->toArray();

            $result = array_merge($result, $rightResult);
        }

        return $result;
    }

    /**
     * Возвращает строковое представление дерева
     * @return string
     */
    public function toString() : string
    {
        $imploded = implode(", ", $this->toArray());
        return "({$imploded})";
    }

    /**
     * Проверяет, удовлетворяют ли все ключи дерева условию, заданному в передаваемой функции
     * @param object $callback
     * @return bool
     */
    public function every(object $callback) : bool
    {
        $allKeys = $this->toArray();

        $result = array_filter($allKeys, $callback);

        return count($result) === count($allKeys);
    }
}