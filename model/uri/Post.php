<?php

namespace app\model\uri;

use app\model\validation\Post as ValidationPost;
use app\router\Routes;

class Post
{
    public ValidationPost $postVal;

    public function __construct()
    {
        $this->postVal = new ValidationPost;
    }

    public function uri($url)
    {
        // $data = $this->post;
        // $this

        // $v = new Valitron\Validator($_POST);
        // $v->rule('required', ['name', 'email']);
        // $v->rule('email', 'email');
        // if($v->validate()) {
        //     echo "Yay! We're all good!";
        // } else {
        //     // Errors
        //     print_r($v->errors());
        // }

        /* Valitron\Validator::addRule('alwaysFail', function($field, $value, array $params, array $fields) {
            return false;
        }, 'Everything you do is wrong. You fail.'); */

        $postRoutes = Routes::postRoutes();

        // $data = $_POST;

        switch ($url) {

            case '/connexion':
                $this->postVal->connexion();
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
                break;
        }
    }
}
