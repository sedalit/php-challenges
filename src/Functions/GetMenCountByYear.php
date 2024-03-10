<?php

namespace Sedalit\PhpChallenges\Functions\GetMenCountByYear;

/**
 * Функция, которая принимает на вход список пользователей и возвращает массив, в котором ключ это год рождения, а значение это количество мужчин, родившихся в этот год.
 */
function getMenCountByYear(array $users) : array
{
    if (count($users) === 0) return [];
    
    return array_reduce($users, function(array $acc, array $user) {
        if ($user['gender'] != "male") return $acc;

        $timestamp = strtotime($user['birthday']);
        $date = date('Y', $timestamp);

        array_key_exists($date, $acc) === true ? $acc[$date] += 1 : $acc[$date] = 1;

        return $acc;
    }, []);
}