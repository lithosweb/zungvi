<?php

namespace app\model\validation;

use app\auth\Auth;
use app\model\Validation;

class Post extends Validation
{
    public function connexion()
    {
        $this->v->rule('required', ['username', 'password', '_auth']);
        $this->v->rule('length', '_auth', 60);
        if (!password_verify('auth', $this->post['_auth'])) {
            $this->v->error('_auth', 'Wrong authentication');
        }
        $this->v->rule('lengthMin', 'username', 3);
        $this->v->rule('lengthMin', 'password', 6);
        $this->v->rule('lengthMax', ['username', 'password'], 30);
        if ($this->v->validate()) {
            header("Location: /welcome");
            exit;
        } else {
            $_SESSION['errors'] = $this->v->errors();
            header('Location: /connexion');
            exit;
        }
    }
}
