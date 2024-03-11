<?php

namespace Sedalit\PhpChallenges\DataAbstraction\Rational;

/**
 * Абстракция для работы с рациональными числами (дробями).
 */

function makeRational(int $numer, int $denom) : array
{
    $gcd = gcd($numer, $denom);

    return [
        'numer' => $numer / $gcd,
        'denom' => $denom / $gcd
    ];
}

function getNumer(array $rational) : int
{
    return $rational['numer'];
}

function getDenom(array $rational) : int
{
    return $rational['denom'];
}

function rationalToString(array $rational) : string
{
    return getNumer($rational) . '/' . getDenom($rational);
}

function add(array $rational1, array $rational2) : array
{
    $numer = getNumer($rational1) * getDenom($rational2) + getNumer($rational2) * getDenom($rational1);
    $denom = getDenom($rational1) * getDenom($rational2);
    return makeRational($numer, $denom);
}

function sub(array $rational1, array $rational2) : array
{
    $numer = getNumer($rational1) * getDenom($rational2) - getNumer($rational2) * getDenom($rational1);
    $denom = getDenom($rational1) * getDenom($rational2);
    return makeRational($numer, $denom);
}

function gcd(int $a, int $b) : int
{
    return $a % $b === 0 ? abs($b) : gcd($b, $a % $b);
}