<?php
namespace app\model;

use Valitron\Validator;

class Validation {

    public array $post;
    public Validator $v;

    public function __construct()
    {
        $this->post = $_POST;
        $this->v = new Validator($this->post);
    }
}