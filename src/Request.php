<?php

namespace Pipe;

class Request
{
    private static $instance;

    public static function getInstance(): static
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function post(string $key = null): mixed
    {
        return $_POST[$key] ?? $_POST ?? [];
    }

    public function get(string $key = null): mixed
    {
        return $_GET[$key] ?? $_GET ?? [];
    }

    public function query(string $key = null): mixed
    {
        return $this->get($key);
    }

    public function headers(): array
    {
        return getallheaders();
    }

    public function header(string $key): mixed
    {
        return $this->headers()[$key] ?? null;
    }

    public function method(): mixed
    {
        return $_SERVER["REQUEST_METHOD"] ?? null;
    }
}
