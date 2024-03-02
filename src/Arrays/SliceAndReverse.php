<?php

namespace Sedalit\PhpChallenges\Arrays\SliceAndReverse;

/**
 * Функция, делающая срез массива и добавляющая реверсивное значение среза в итоговый массив
 * @param array $array Массив
 * @param int $startIndex Индекс, с которого нужно начать срез
 * @param int $endIndex Индекс, по который нужно сделать срез
 */
function sliceAndReverse(array $array, int $startIndex, int $endIndex) : array
{
    $result = [];
    $isReversed = false;

    $start = $startIndex > 0 ? $startIndex : 1;
    $resultTargetCount = ($start + $endIndex) * ($endIndex - $startIndex);
    
 
    for ($i = $startIndex; $i <= $resultTargetCount; $i++) { 
        if ($i > $endIndex) {
            $isReversed = true;
        }

        $arrayTargetElem = $endIndex * 2 - ($i - 1);

        if ($arrayTargetElem < $startIndex) {
            break;
        } 
        else if ($isReversed) {
            $result[] = $array[$arrayTargetElem];
        } else {
            $result[] = $array[$i];
        }
    
    }
    print_r($result);
    return $result;
}