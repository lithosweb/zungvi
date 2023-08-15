<?php

declare(strict_types=1);

namespace app\controller;

use app\auth\Auth;
use app\model\Model;

class Controller implements Controller_Interface
{
    public Model $model;

    public function __construct()
    {
        Auth::start();
        $this->model = new Model;
    }
}
