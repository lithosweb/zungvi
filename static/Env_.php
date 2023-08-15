<?php

declare(strict_types=1);

namespace app\static;

use Dotenv\Dotenv;

class Env_ implements Static_Interface
{

    public static function env(): array
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        return $dotenv->safeLoad();
    }

    public static function get(): array
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        return $dotenv->safeLoad();
    }
}
