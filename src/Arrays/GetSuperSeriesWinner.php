<?php

namespace Sedalit\PhpChallenges\Arrays\GetSuperSeriesWinner;

/**
     * Функция, которая находит команду победителя для серии игр. Победитель определяется как команда у которой больше побед (не количество очков)
     * @param array $games Массив, в котором каждый элемент это массив, описывающий счет в конкретной игре (сколько очков у каждой команды, пример - [[2, 1], [3, 4]])
     * @return string Функция возвращает 'first', если победила первая команда, 'second', если победила вторая команда, 'draw', если ничья.
*/
function getSuperSeriesWinner(array $games) : string
{
    $firstTeamWins = 0;

    foreach ($games as $game) {
        if ($game[0] > $game[1]){
            $firstTeamWins++;
        } else if ($game[0] === $game[1]) {
            continue;
        } else {
            $firstTeamWins--;
        }
    }
    
    if ($firstTeamWins === 0) return 'draw';

    return $firstTeamWins > 0 ? 'first' : 'second';
}