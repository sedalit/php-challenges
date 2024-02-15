<?php

namespace Sedalit\PhpChallenges\Arrays\GetTotalAmount;

/**
     * Функция принимает на вход в виде массива кошелёк с деньгами и название валюты и возвращает сумму денег указанной валюты.
     * @param array $array Массив
     * @param string $currency Валюта, сумму которой необходимой получить
*/
function getTotalAmount(array $array, string $currency) : float
{
    $currency = strtolower($currency);
    $sum = 0;

    foreach ($array as $wallet) {
        $wallet = strtolower($wallet);
        if ($amount = str_replace($currency, '', $wallet)) {
            $sum += (float)$amount;
        }
    }

    return $sum;
} 