<?php

namespace Sedalit\PhpChallenges\Basic\IsHappyTicket;

/**
     * Функция, которая определяет, равна ли сумма первой половины строки второй половине. ('214511' => 2 + 1 + 4 = 5 + 1 + 1)
     * @param string $ticketNumber Строка, содержащая чётное количество цифр
*/
function isHappyTicket(string $ticketNumber) : bool
{
    $half = strlen($ticketNumber) / 2;
    $sum = 0;
    $sumSecond = 0;

    for ($i = 0; $i < $half; $i++) {
        $sum += $ticketNumber[$i];
        $sumSecond += $ticketNumber[-$i - 1];
        
    }
    return $sum === $sumSecond;
}