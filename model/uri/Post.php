<?php

namespace app\model\uri;

use app\router\Routes;

class Post
{
    public function uri($url)
    {
        $postRoutes = Routes::postRoutes();

        if (!array_key_exists($url, $postRoutes)) {
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
