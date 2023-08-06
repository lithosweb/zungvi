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

            case 'value':
                # code...
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


            case 'value':
                # code...
                break;

            default:
                # code...
                break;
        }
    }
}
