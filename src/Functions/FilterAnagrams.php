<?php

namespace Sedalit\PhpChallenges\Functions\FilterAnagrams;

/**
 * Функция, которая находит все анаграммы слова. 
 * Функция принимает исходное слово и список для проверки (массив), а возвращает массив всех анаграмм. 
 * Если в списке слов отсутствуют анаграммы, то возвращается пустой массив.
 */
function filterAnagrams(string $word, array $anagrams) : array
{
    $splittedWord = str_split($word);

    $result = array_filter($anagrams, function(string $anagram) use ($splittedWord, $word){
        $splittedAnagram = str_split($anagram);
        $difference = array_merge(array_diff($splittedAnagram, $splittedWord), array_diff($splittedWord, $splittedAnagram));

        return count($difference) === 0 && strlen($anagram) === strlen($word);
    });

    return array_values($result);
}