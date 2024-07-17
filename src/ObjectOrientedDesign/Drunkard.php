<?php

namespace App\ObjectOrientedDesign;

use Ds\Deque;

/**
 * Класс, описывающий партию в карточной игре "Пьяница"
 */
class Drunkard {

    /**
     * Функция, которая принимает на вход два списка чисел, которые представляют собой карты для первого и второго игроков.
     * Если выиграл первый игрок, то метод должен вернуть First player. Round: <номер раунда>.
     * Если выиграл первый игрок, то метод должен вернуть First player. Round: <номер раунда>.
     * Если выиграл второй игрок, то метод должен вернуть Second player. Round: <номер раунда>.
     * Если у игроков не осталось карт, то метод должен вернуть Botva!
     * Если за 100 раундов не удалось выявить победителя то также возвращается Botva!
     * @param array $firstDeque
     * @param array $secondDeque
     * @return string
     */
    public function run(array $firstDeque, array $secondDeque) : string
    {
        [$firstDeque, $secondDeque] = [new Deque($firstDeque), new Deque($secondDeque)];

        $roundCount = 1;

        while($roundCount < 100) {
            $firstPlayerCard = $firstDeque->shift();
            $secondPlayerCard = $secondDeque->shift();

            if ($firstPlayerCard > $secondPlayerCard) {
                $firstDeque->push($firstPlayerCard, $secondPlayerCard);
            } else if ($secondPlayerCard > $firstPlayerCard) {
                $secondDeque->push($secondPlayerCard, $firstPlayerCard);
            } 
            
            if ($firstDeque->count() === 0 && $secondDeque->count() === 0) {
                break;
            } else if ($firstDeque->count() === 0) {
                return "Second player. Round: {$roundCount}";
            } else if ($secondDeque->count() === 0) {
                return "First player. Round: {$roundCount}";
            }

            $roundCount++;
        }

        return "Botva!";
    }
}