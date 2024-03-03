<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\ToRna;

/**
 * Функция для преобразования переданной цепи ДНК в цепь РНК.
 */
function toRna(string $dnaChain) : string
{
    $dnaPairs = [
        'A' => 'U',
        'C' => 'G',
        'T' => 'A',
        'G' => 'C'
    ];
    $rna = "";

    for ($i = 0; $i < strlen($dnaChain); $i++) {
        $char = $dnaChain[$i];
        if ($dnaPairs[$char]) $rna .= $dnaPairs[$char];
    }

    return $rna;
}