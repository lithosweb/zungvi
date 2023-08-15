<?php

declare(strict_types=1);

namespace app\model\uri;

use app\router\Routes;
use app\sanitize\Sanitize;

class Delete
{


    public function uri($url): void
    {
        $data = Sanitize::data(json_decode(file_get_contents('php://input'), true));
        $deleteRoutes = Routes::deleteRoutes();

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
