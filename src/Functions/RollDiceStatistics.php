<?php

namespace Sedalit\PhpChallenges\Functions\RollDice;

/**
 * Функция, имитирующая бросок 6-гранного игрального кубика указанное количество раз и возврающая горизонтальную гистограмму.
 * Гистограмма содержит строки, каждой из которых соответствует грань игральной кости и количество выпадений этой грани. 
 * Результаты отображаются графически (с помощью символов #) и в виде числового значения, за исключением случаев, когда количество равно 0 (нулю).
 */
function rollDiceStatistics(int $numberToRoll, int $seed = 0) : array
{
    $result = [];
    $rollResults = rollDice($numberToRoll, $seed);

    $init = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
    $agregated = array_reduce($rollResults, function(array $acc, int $number) {
        $acc[$number] += 1;
        return $acc;
    }, $init);

    foreach ($agregated as $key => $value) {
        $repeatedSymbol = str_repeat("#", $value);
        $result[$key] = $repeatedSymbol;
        echo "{$key} |{$repeatedSymbol}\n";
    }

    return $result;
}

function rollDice(int $numberToRoll, int $seed = 0) {
    $rollResults = [];
    srand($seed);
    for($i = 0; $i < $numberToRoll; $i++) {
        $rollResults[] = rand(1, 6);
    }

    return $rollResults;
}