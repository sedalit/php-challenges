<?php

namespace Sedalit\PhpChallenges\Functions\GetFreeDomainsCount;

const FREE_EMAIL_DOMAINS = ["gmail.com", "yandex.ru", "hotmail.com"];

/**
 * Функция, которая принимает на вход список емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном домене. 
 * Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.
 */
function getFreeDomainsCount(array $emails) : array
{
    return array_reduce($emails, function (array $acc, string $email) {
        $domain = explode("@", $email)[1];

        if (!in_array($domain, FREE_EMAIL_DOMAINS)) return $acc;

        array_key_exists($domain, $acc) === true ? $acc[$domain] += 1 : $acc[$domain] = 1;
        return $acc;
    }, []);
}