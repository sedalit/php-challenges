<?php

namespace App\Classes;

/**
 * Класс, описывающий таймер обратного отсчёта
 */
class Timer {
    protected const SEC_PER_MINUTE = 60;
    protected const SEC_PER_HOUR = self::SEC_PER_MINUTE * 60;

    protected $seconds;
    protected $minutes;
    protected $hours;

    /**
     * Количество оставшегося на таймере времени в секундах
     * @var 
     */
    protected $secondsCount;

    public function __construct(int $seconds, int $minutes = 0, int $hours = 0) 
    {
        $this->seconds = $seconds;
        $this->minutes = $minutes;
        $this->hours = $hours;

        $this->secondsCount = $seconds + ($minutes * self::SEC_PER_MINUTE) + ($hours * self::SEC_PER_HOUR);
    }

    public function getSecondsCount() : int
    {
        return $this->secondsCount;
    }

    public function tick() : void
    {
        $this->secondsCount--;
    }
}