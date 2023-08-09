<?php

namespace app\auth;

class Auth
{

    public static function start()
    {
        return session_start();
    }

    public static function erase()
    {
        return session_unset();
    }

    public static function check()
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

    public static function set()
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
