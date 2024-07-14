<?php

namespace App\ObjectOrientedDesign;

class Url {
    /**
     * Протокол передачи данных
     * @var string
     */
    protected $scheme;

    /**
     * Адрес хоста
     * @var string
     */
    protected $host;

    /**
     * Путь запроса
     * @var string
     */
    protected $path;

    /**
     * Массив параметров запроса
     * @var array
     */
    protected $queryParams = [];

    public function __construct(string $url) {
        $parsedUrl = parse_url($url);

        $this->scheme = $parsedUrl['scheme'] ?? "";
        $this->host = $parsedUrl['host'] ?? "";
        $this->path = $parsedUrl['path'] ?? "";
        
        $query = [];

        if (isset($parsedUrl['query'])) parse_str($parsedUrl['query'], $query);

        $this->queryParams = $query;
    }

    public function equals(Url $url) : bool
    {
        return $this == $url;
    }

    public function getScheme() : string
    {
        return $this->scheme;
    }

    public function getHost() : string
    {
        return $this->host;
    }

    public function getPath() : string
    {
        return $this->path;
    }

    public function getQueryParams() : array
    {
        return $this->queryParams;
    }

    public function getQueryParam(string $key, string $defaultValue = null) : ?string
    {
        return $this->queryParams[$key] ?? $defaultValue;
    }
}