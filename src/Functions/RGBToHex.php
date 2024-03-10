<?php

namespace Sedalit\PhpChallenges\Functions\RGBToHex;

/**
 * Функция, конвертирующая цвет из формата RGB в шестнадцатеричный формат.
 */
function RGBToHex(int $red, int $green, int $blue) : string
{
    $red = dechex($red) === "0" ? "00" : dechex($red);
    $green = dechex($green) === "0" ? "00" : dechex($green);
    $blue = dechex($blue) === "0" ? "00" : dechex($blue);

    return "#{$red}{$green}{$blue}";
}