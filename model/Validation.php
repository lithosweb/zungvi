<?php
namespace app\model;

use app\sanitize\Sanitize;
use Valitron\Validator;

class Validation {

    public array $Post;
    public array $Get;
    public Validator $v;

    public function __construct()
    {
        $this->Get = Sanitize::data($_GET);
        $this->Post = Sanitize::data($_POST);
        $this->v = new Validator($this->Post);
    }
}