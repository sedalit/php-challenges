<?php

namespace App\Classes;

/**
 * Класс, описывающий рациональное (дробное) число
 */
class Rational {
    /**
     * Числитель рационального числа
     * @var int
     */
    protected $numer;

    /**
     * Знаменатель рационального числа
     * @var int
     */
    protected $delimeter;

    public function __construct(int $numer, int $delimeter) 
    {
        $this->numer = $numer;
        $this->delimeter = $delimeter;
    }

    /**
     * Функция прибавляет переданную дробь к дроби на которой был вызван метод
     * @param \App\Classes\Rational $rational
     * @return \App\Classes\Rational
     */
    public function add(Rational $rational) : Rational
    {
        return new Rational(
            $this->getNumer() + $rational->getNumer(),
            $this->getDelimeter() + $rational->getDelimeter()
        );
    }

    /**
     * Функция находит разность между дробью на которой был вызван метод и переданной дробью
     * @param \App\Classes\Rational $rational
     * @return \App\Classes\Rational
     */
    public function sub(Rational $rational) : Rational
    {
        return new Rational(
            $this->getNumer() - $rational->getNumer(),
            $this->getDelimeter() - $rational->getDelimeter()
        );
    }

    public function getNumer() : int
    {
        return $this->numer;
    }

    public function getDelimeter() : int
    {
        return $this->delimeter;
    }
}