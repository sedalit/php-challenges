<?php

namespace App\Classes;

/**
 * Генератор псевдослучайных чисел, реализующий линейный конгруэнтный метод получения чисел
 */
class Random {
    /**
     * Множитель A
     * @var int
     */
    protected const MULTIPLIER_A = 106; 

    /**
     * Слагаемое C
     * @var int
     */
    protected const SUMMAND_C = 1283; 

    /**
     * Делитель M
     * @var int
     */
    protected const DELIMETER_M = 6075;

    /**
     * Начальное значение (зерно)
     * @var int
     */
    protected $seed;

    /**
     * Текущий шаг
     * @var int
     */
    protected $n = 1;

    public function __construct(int $seed = 1) 
    {
        $this->seed = $seed;
        $this->n = $seed;
    }

    /**
     * Функция получения нового случайного числа
     * @return int
     */
    public function getNext() : int
    {
        $this->n = (($this->n * self::MULTIPLIER_A) + self::SUMMAND_C) % self::DELIMETER_M;
        return $this->n;
    }

    /**
     * Метод сбрасывания генератора на начальное значение
     * @return void
     */
    public function reset() : void
    {
        $this->n = $this->seed;
    }
}