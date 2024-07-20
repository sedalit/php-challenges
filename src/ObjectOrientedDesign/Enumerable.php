<?php

namespace App\ObjectOrientedDesign;

/**
 * Класс предназначен для обработки коллекций ассоциативных массивов. 
 * Основная особенность работы данного класса заключается в том, что он использует lazy вариант обработки
 */
class Enumerable implements EnumerableInerface {
    
    /**
     * Массив элементов, которые необходимо обрабатывать
     * @var array
     */
    protected $elements = [];

    /**
     * Массив замыканий (фильтров), которые будут применяться к элементам
     * @var array
     */
    protected $filters = [];

    private function __construct(array $elements) 
    {
        $this->elements = $elements;
    }

    public static function wrap(array $elements): Enumerable
    {
        return new self($elements);
    }

    /**
     * Добавляет фильтр для выбора элементов, у которых значение по заданному ключу равно указанному значению
     * @param mixed $key 
     * @param mixed $value 
     * @return self Возвращает текущий экземпляр для цепочного вызова методов
     */
    public function where($key, $value) : Enumerable
    {
        $this->filters[] = function ($element) use ($key, $value) {
            return isset($element[$key]) && $element[$key] === $value;
        };

        return $this;
    }

    /**
     * Применяет все накопленные фильтры к элементам и возвращает отфильтрованные элементы
     * @return array
     */
    public function all() : array
    {
        return array_values(array_filter($this->elements, function ($element) {
            foreach ($this->filters as $filter) {
                if (!$filter($element)) {
                    return false;
                }
            }
            return true;
        }));
    }
}