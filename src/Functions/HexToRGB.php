<?php

namespace Sedalit\PhpChallenges\Functions\HexToRGB;

/**
 * Функция, конвертирующая цвет из шестнадцатеричного формата в формат RGB.
 * @param string $hexColor Строка с цветом в шестнадцатиричном формате.
 * @return array Массив, обозначающий переданный цвет в формате RGB.
*/
function hexToRGB(string $hexColor) : array
{
    $hexColor = substr($hexColor, 1);
    [$red, $green, $blue] = str_split($hexColor, 2);

    return [
        'r' => hexdec($red),
        'g' => hexdec($green),
        'b' => hexdec($blue)
    ];
}