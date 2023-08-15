<?php

declare(strict_types=1);

namespace app\auth;

class Auth implements Auth_Interface
{

    public static function start(): bool
    {
        return session_start();
    }

    public static function erase(): bool
    {
        return session_unset();
    }

    public static function check(): void
    {
        if (empty($_SESSION)) {
            header("Location: /connexion");
            exit;
        }
        if (!array_key_exists("auth", $_SESSION)) {
            header("Location: /connexion");
            exit;
        }
        $db = "username"; // hash username from the database
        if (!password_verify($_SESSION["auth"], $db)) {
            header("Location: /connexion");
            exit;
        }
        return;
    }

    public static function set(): array
    {
        if ($_SESSION['auth']) {
            self::check();
        }

        session_regenerate_id(true);

        $db = "username"; // username to hash from the DB

        $_SESSION["auth"] = password_hash($db, PASSWORD_BCRYPT);
        return $_SESSION;
    }
}
