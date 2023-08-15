<?php

declare(strict_types=1);

namespace app\model\uri;

use app\model\View;
use app\router\Routes;
use app\sanitize\Sanitize;

class Get
{
    public function uri($url): void
    {
        $getRoutes = Routes::getRoutes();

        $data = Sanitize::data($_GET);
        
        $uri_0 = explode('/', $url)[0];
        if ($uri_0 !== '') {
            header('Location: /welcome');
            exit;
        }
        $uri_1 = explode('/', $url)[1];
        $uri_2 = explode('/', $url)[2] ?? '';


        switch ($uri_1) {

            case 'signup':
                View::getOut('signup', 'connexion', '_conn');
                break;

            case 'connexion':
                View::getOut('connexion', 'connexion', '_conn');
                break;

            case 'welcome':
                View::getOut('welcome');
                break;

            case 'explore':
                $this->explore_uri($uri_2);
                break;

            case 'notifications':
                View::getOut('notification');
                break;

            case 'messages':
                View::getOut('message');
                break;

            case 'profil':
                $this->profil_uri($uri_2);
                break;

            case 'settings':
                View::getOut('settings');
                break;

            case 'help':
                View::getOut('help', 'etc');
                break;

            case 'about':
                View::getOut('about', 'etc');
                break;

            case 'error':
                View::getOut('404', 'etc');
                break;

            case 'logout':
                header('Location: /connexion');
                break;

            default:
                header('Location: /welcome');
                break;
        }
    }

    public function profil_uri($uri_2): void
    {
        $path = 'profil/';
        switch ($uri_2) {
            case '':
                View::getOut('profil');
                break;

            case 'bookmarks':
                View::getOut($path . 'bookmark');
                break;

            case 'favourites':
                View::getOut($path . 'favourite');
                break;

            case 'groups':
                View::getOut($path . 'group');
                break;

            case 'photos':
                View::getOut($path . 'photo');
                break;

            case 'videos':
                View::getOut($path . 'video');
                break;

            case 'audios':
                View::getOut($path . 'audio');
                break;

            case 'edit':
                View::getOut($path . 'edit');
                break;

            default:
                header('Location: /profil');
                break;
        }
    }

    public function explore_uri($uri_2): void
    {
        $path = 'explore/';
        switch ($uri_2) {
            case '':
                View::getOut('explore');
                break;

            case 'people':
                View::getOut($path . 'people');
                break;

            case 'photos':
                View::getOut($path . 'photo');
                break;

            case 'videos':
                View::getOut($path . 'video');
                break;

            case 'audios':
                View::getOut($path . 'audio');
                break;

            case 'groups':
                View::getOut($path . 'group');
                break;

            default:
                header('Location: /explore');
                break;
        }
    }
}
