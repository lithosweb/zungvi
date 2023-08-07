<?php

namespace app\static;

use Dotenv\Dotenv;

class Env_
{

    public static function env()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        return $dotenv->safeLoad();
    }
}
