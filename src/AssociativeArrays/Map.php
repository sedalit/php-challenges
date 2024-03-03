<?php

namespace Sedalit\PhpChallenges\AssociativeArrays\Map;

/**
 * Набор функций, для работы со словарём, построенным на хеш-таблице. 
 */


/**
 * Функция, создающая новый словарь
 */
function make() : array
{
    return [];
}

/**
 * Функция, читающая в словаре значение по ключу и возвращает его.
 * @param array $map Словарь для чтения.
 * @param string $key Ключ, который нужно найти в словаре.
 * @param mixed $defaultValue Значение, которое нужно вернуть, если ключ не найден в словаре.
 * При возникновении коллизии функция также возвращает значение по умолчанию.
 */
function get(array $map, string $key, $defaultValue = null)
{
    $index = hash($key);

    return $map[$index]['value'] ?? $defaultValue;
}

/**
 * Функция, устанавливающая в словарь значение по ключу. Работает и для создания и для изменения.
 * @param array $map Словарь для изменения
 * @param string $key Ключ, под которым нужно записать значение
 * @param mixed $value Значение, которое нужно записать
 * @return bool Возвращает true, если удалось установить значение. 
 * При возникновении коллизии, функция никак не меняет словарь и возвращает false.
 */
function set(array &$map, string $key, $value) : bool
{
    $index = hash($key);

    if (isset($map[$index])) {
        $currentKey = $map[$index]['key'];
 
        if ($currentKey !== $key) {
            return false;
        }
    }

    $map[$index] = ['key' => $key, 'value' => $value];
    return true;
}

function hash(string $string) : int
{
    $hash = crc32($string);
    return $hash % 1000;
}