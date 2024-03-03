<?php

namespace Sedalit\PhpChallenges\Arrays\MakeCensored;

/**
     * Функция, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку.
     * @param string $text Предложение, которое необходимо зацензурить
     * @param array $wordsToCensor Массив нецензурных строк
*/
function makeCensored(string $text, array $wordsToCensor) : string
{
    $censoredWords = explode(" ", $text);
    $censorhip = "$#%!";

    foreach ($censoredWords as $key => $word) {
        if (in_array($word, $wordsToCensor)) {
            $censoredWords[$key] = $censorhip;
        }
    }

    return implode(" ", $censoredWords);
}