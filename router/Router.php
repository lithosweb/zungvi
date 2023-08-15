<?php

namespace app\router;

class Router implements Router_Interface
{
    public function getMethod(): string
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public function getUrl(): string
    {
        return parse_url($_SERVER["REQUEST_URI"])["path"];
    }

    public function getQuery(): string
    {
        if (array_key_exists("query", parse_url($_SERVER["REQUEST_URI"]))) {
            return parse_url($_SERVER["REQUEST_URI"])["query"];
        } else {
            return '';
        }
    }

}
