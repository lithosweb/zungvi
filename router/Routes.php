<?php

namespace app\router;

class Routes implements Router_Interface
{
    public static function getRoutes(): array
    {
        return [
            "/connexion" => "connexion",
            "/welcome" => "welcome",
            "/explore" => "explore",
            "/explore/people" => "",
            "/explore/photos" => "",
            "/explore/videos" => "",
            "/explore/audios" => "",
            "/explore/groups" => "",
            "/notifications" => "",
            "/messages" => "",
            "/profil" => "profil",
            "/profil/bookmark" => "",
            "/profil/favourites" => "",
            "/profil/groups" => "",
            "/profil/photos" => "",
            "/profil/videos" => "",
            "/profil/audios" => "",
            "/profil/edit" => "",
            "/settings" => "",
            "/help" => "help",
            "/logout" => "logout",
            "" => "",
        ];
    }

    public static function postRoutes(): array
    {
        return [
            "" => "",
        ];
    }

    public static function patchRoutes(): array
    {
        return [
            "" => "",
        ];
    }

    public static function deleteRoutes(): array
    {
        return [
            "" => "",
        ];
    }
}
