<?php

namespace app\router;

class Router
{
    public function getMethod()
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public function getUrl()
    {
        return parse_url($_SERVER["REQUEST_URI"])["path"];
    }

    public function getQuery()
    {
        if (array_key_exists("query", parse_url($_SERVER["REQUEST_URI"]))) {
            return parse_url($_SERVER["REQUEST_URI"])["query"];
        } else {
            return null;
        }
    }

}
