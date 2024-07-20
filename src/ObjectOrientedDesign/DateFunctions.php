<?php

namespace App\ObjectOrientedDesign\DateFunctions;

use Tightenco\Collect\Support;
use Carbon\CarbonPeriod;

/**
 * Функция, которая переводит входные данные в удобный для построения графика формат
 * @param array $data Массив входных данных. Каждая запись массива представляет из себя объект типа [ 'value' => 14, 'date' => '02.08.2018' ]
 * @param string $beginDate Дата начала периода (в форме строк типа 'YYYY-MM-DD')
 * @param string $endDate Дата конца периода (в форме строк типа 'YYYY-MM-DD')
 * @return array Диапазон дат
 */
function buildRange(array $data, string $beginDate, string $endDate) : array
{
    $datesByDate = collect($data)->keyBy('date');
    return collect(CarbonPeriod::create($beginDate, '1 day', $endDate))
        ->map(function ($date) {
            return $date->format('d.m.Y');
        })
        ->map(function ($date) use ($datesByDate) {
            return $datesByDate[$date] ?? ['value' => 0, 'date' => $date];
        })
        ->all();
}