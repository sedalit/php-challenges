<?php

namespace Sedalit\PhpChallenges\DataAbstraction\Url;

/**
 * Абстракция для работы с URL
 */

function make(string $url) : array
{
    $urlData = parse_url($url);
    $result = [];

    $result['scheme'] = $urlData['scheme'] ?? "";
    $result['host'] = $urlData['host'] ?? "";
    $result['path'] = $urlData['path'] ?? "";
    $query = [];

    if (isset($urlData['query'])) parse_str($urlData['query'], $query);

    $result['query'] = $query;
    
    return $result;
}

function setScheme(array $data, string $scheme) : array
{
    $data['scheme'] = $scheme;
    return $data;
}

function getScheme(array $data) : string
{
    return $data['scheme'];
}

function setHost(array $data, string $host) : array
{
    $data['host'] = $host;
    return $data;
}

function getHost(array $data) : string
{
    return $data['host'];
}

function setPath(array $data, string $path) : array
{
    $data['path'] = $path;
    return $data;
}

function getPath(array $data) : string
{
    return $data['path'];
}

function setQueryParam(array $data, $key, $value) : array
{
    $data['query'] = $data['query'] ?? [];
    $data['query'][$key] = $value;

    return $data;
}

function getQueryParam(array $data, $key, $default = null)
{
    return $data['query'][$key] ?? $default;
}

function toString(array $data) : string
{
    $scheme = getScheme($data);
    $host = getHost($data);
    $path = getPath($data);

    $query = "";

    if (count($data['query']) > 0) $query = "?" . http_build_query($data['query']);
    if (strlen($scheme) > 0) $scheme .= "://";

    return "{$scheme}{$host}{$path}{$query}";
}