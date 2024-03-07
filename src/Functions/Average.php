<?php

namespace Sedalit\PhpChallenges\Functions\Average;

function average(float ...$numbers) : float
{
    $result = 0;

    if (count($numbers) === 0) return $result;

    foreach ($numbers as $value) {
        $result += $value;
    }

    return $result / count($numbers);
}

var_dump(average(1, 2, 3, 4, 5));