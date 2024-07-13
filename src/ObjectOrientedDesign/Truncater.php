<?php

namespace App\ObjectOrientedDesign;

class Truncater {
    /**
     * Конфигурация обрезки текста по умолчанию
     * @var array
     */
    protected const OPTIONS = [
        'separator' => '...',
        'length' => 200
    ];

    /**
     * Переопределяемая конфигурация обрезки текста
     * @var array
     */
    protected $options = [];

    public function __construct(array $options = []) 
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    /**
     * Функция обрезки текста
     * @param string $string Строка
     * @param array $options Массив опций обрезки. Опции: length - максимально допустимая длина строки, separator - символы, заменяющие обрезанную часть строки
     * @return string
     */
    public function truncate(string $string, array $options = []) : string
    {
        $options = array_merge($this->options, $options);

        $stringLength = strlen($string);

        if ($stringLength >= $options['length']) {
            $truncated = substr($string, 0, $options['length']) . $options['separator'];
        }

        return $truncated ?? $string;
    }
}