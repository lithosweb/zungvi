<?php
namespace app\model;

use app\api\mail\Gmail;
use app\api\mail\Zungvi;
use app\sanitize\Sanitize;
use Valitron\Validator;

class Validation {

    public array $Post;
    public array $Get;
    public Validator $v;
    public Zungvi $zungvi;
    public Gmail $gmail;

    public function __construct()
    {
        $this->Get = Sanitize::data($_GET);
        $this->Post = Sanitize::data($_POST);
        $this->v = new Validator($this->Post);
        $this->zungvi = new Zungvi;
        $this->gmail = new Gmail;
    }
}