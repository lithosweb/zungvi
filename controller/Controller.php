<?php
namespace app\controller;

use app\model\Model;

class Controller {
    public Model $model;

    public function __construct()
    {
        $this->model = new Model;
    }
    
}