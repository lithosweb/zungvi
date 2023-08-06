<?php

namespace app\model\uri;

use app\router\Routes;

class Patch 
{
    public function uri($url)
    {
        $patchRoutes = Routes::patchRoutes();

        if (!array_key_exists($url, $patchRoutes)) {
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
