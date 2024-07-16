<?php

namespace App\ObjectOrientedDesign;

use Carbon\Carbon;

class Booking {

    /**
     * Массив забронированных дат
     * @var array
     */
    protected $bookedDays = [];

    /**
     * Функция, проверяющая возможность бронирования и, если бронирование возможно, выполняющая бронирование
     * @param string $startDate Дата начала бронирования
     * @param string $endDate Дата конца бронирования
     * @return bool
     */
    public function tryBook(string $startDate, string $endDate) : bool
    {
        [$startDate, $endDate] = [new Carbon($startDate), new Carbon($endDate)];

        if ($startDate > $endDate) return false;

        foreach ($this->bookedDays as $value) {
            [$periodStart, $periodEnd] = [$value[0], $value[1]];

            if ($startDate < $periodEnd && $endDate > $periodStart) {
                return false;
            }
        }

        $this->bookedDays[] = [$startDate, $endDate];
        return true;
    }
}