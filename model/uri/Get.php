<?php

namespace app\model\uri;

use app\model\View;
use app\router\Routes;

class Get
{
    public function uri($url)
    {
        $uri_0 = explode('/', $url)[0];
        if ($uri_0 !== '') {
            header("Location: /welcome");
            exit;
        }
        $uri_1 = explode('/', $url)[1];
        $uri_2 = explode('/', $url)[2] ?? '';

        $getRoutes = Routes::getRoutes();

        $data = $_GET;

        switch ($uri_1) {

            case 'connexion':
                View::getOut("connexion", "connexion", "_conn");
                break;

            case 'welcome':
                View::getOut("welcome");
                break;

            case 'explore':
                $this->explore_uri($uri_2);
                break;

            case 'notifications':
                View::getOut("notification");
                break;

            case 'messages':
                View::getOut("message");
                break;

            case 'profil':
                $this->profil_uri($uri_2);
                break;

            case 'settings':
                View::getOut("settings");
                break;

            case 'help':
                View::getOut("help", "etc");
                break;

            case 'about':
                View::getOut("about", "etc");
                break;

            case 'error':
                View::getOut("404", "etc");
                break;

            case 'logout':
                header("Location: /connexion");
                break;

            default:
                header("Location: /welcome");
                break;
        }
    }

    public function profil_uri($uri_2)
    {
        switch ($uri_2) {
            case '':
                View::getOut("profil");
                break;

            case 'bookmarks':
                View::getOut("profil/bookmark");
                break;

            case 'favourites':
                View::getOut("profil/favourite");
                break;

            case 'groups':
                View::getOut("profil/group");
                break;

            case 'photos':
                View::getOut("profil/photo");
                break;

            case 'videos':
                View::getOut("profil/video");
                break;

            case 'audios':
                View::getOut("profil/audio");
                break;

            case 'edit':
                View::getOut("profil/edit");
                break;

            default:
                header("Location: /profil");
                break;
        }
    }

    public function explore_uri($uri_2)
    {
        switch ($uri_2) {
            case '':
                View::getOut("explore");
                break;

            case 'people':
                View::getOut("explore/people");
                break;

            case 'photos':
                View::getOut("explore/photo");
                break;

            case 'videos':
                View::getOut("explore/video");
                break;

            case 'audios':
                View::getOut("explore/audio");
                break;

            case 'groups':
                View::getOut("explore/group");
                break;

            default:
                header("Location: /explore");
                break;
        }
    }
}
