<?php

namespace app\model;

use app\model\uri\Delete;
use app\model\uri\Get;
use app\model\uri\Patch;
use app\model\uri\Post;
use app\router\Router;
use app\router\Routes;

class ResolveMethod
{
    public Router $router;
    public Get $get;
    public Post $post;
    public Patch $patch;
    public Delete $delete;

    public function __construct()
    {
        $this->router = new Router;
        $this->get = new Get;
        $this->post = new Post;
        $this->patch = new Patch;
        $this->delete = new Delete;
    }

    public function method()
    {
        $meth = $this->router->getMethod();
        $url = $this->router->getUrl();
        $query = $this->router->getQuery();

        switch ($meth) {
            case 'GET':
                $this->get->uri($url, $query);
                break;

            case 'POST':
                $this->post->uri($url, $query);
                break;


            case 'PATCH':
                $this->patch->uri($url, $query);
                break;


            case 'DELETE':
                $this->delete->uri($url, $query);
                break;

            default:
                header("Content: application/json");
                header("Allow: GET, POST, PATCH, DELETE");
                echo json_encode("Method Error::Wrong method");
                break;
        }
    }
}
