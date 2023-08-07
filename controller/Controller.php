<?php
namespace app\controller;

use app\auth\Auth;
use app\model\Model;

class Controller {
    public Model $model;

    public function __construct()
    {
        Auth::start();
        $this->model = new Model;
    }
    
}