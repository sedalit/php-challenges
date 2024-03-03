<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\GetSortedNames;

function getSortedNames(array $users) : array
{
    $result = [];

    foreach ($users as $value) {
        $result[] = $value['name'];
    }

    sort($result, SORT_STRING);
    
    return $result;
}