<?php

namespace app\model\uri;

use app\model\View;
use app\router\Routes;

class Get
{
    public function uri($url)
    {
        $getRoutes = Routes::getRoutes();

        switch ($url) {

            case '/connexion':
                // $_SESSION["routes"] = $getRoutes;
                View::getOut("connexion", "connexion", "_conn");
                break;

            case '/welcome':
                View::getOut("welcome", "views", "_main");
                break;


            case 'value':
                # code...
                break;


            case 'value':
                # code...
                break;


            case 'value':
                # code...
                break;

            default:
                header("Location: /connexion");
                exit;
                break;
        }
    }
}
