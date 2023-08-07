<?php

namespace app\model\uri;

use app\router\Routes;

class Delete
{


    public function uri($url)
    {
        $deleteRoutes = Routes::deleteRoutes();

        if (!array_key_exists($url, $deleteRoutes)) {
            header("Location: /error");
            exit;
        }

        switch ($url) {

            case '/connexion':
                # code...
                break;

            case '/welcome':
                # code...
                break;

            case '/explore':
                # code...
                break;

            case '/explore/people':
                # code...
                break;

            case '/explore/photos':
                # code...
                break;

            case '/explore/videos':
                # code...
                break;

            case '/explore/audios':
                # code...
                break;

            case '/explore/groups':
                # code...
                break;

            case '/notifications':
                # code...
                break;

            case '/messages':
                # code...
                break;

            case '/profil':
                # code...
                break;

            case '/profil/bookmark':
                # code...
                break;

            case '/profil/favourites':
                # code...
                break;

            case '/profil/groups':
                # code...
                break;

            case '/profil/photos':
                # code...
                break;

            case '/profil/videos':
                # code...
                break;

            case '/profil/audios':
                # code...
                break;

            case '/profil/edit':
                # code...
                break;

            case '/settings':
                # code...
                break;

            case '/help':
                # code...
                break;

            case '/error':
                # code... 
                break;

            case 'logout':
                # code...
                break;

            default:
                header("Location: /error");
                exit;
                break;
        }
    }
}
