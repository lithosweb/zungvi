<?php

declare(strict_types=1);

namespace app\model\validation;

use app\auth\Auth;
use app\model\Validation;

class Post extends Validation
{
    public function sign_up($data = []): void
    {
        // valid user s inputs
        $this->v->rule('required', ['username', 'firstname', 'lastname', 'email', 'password', '_auth']);
        $this->v->rule('length', '_auth', 53);
        if (!password_verify('auth', '$2y$10$' . $this->Post['_auth'])) {
            $this->v->error('_auth', 'Wrong authentication');
        }
        $this->v->rule('lengthMin', ['username', 'firstname', 'lastname'], 3);
        $this->v->rule('lengthMin', 'email', 10);
        $this->v->rule('lengthMin', 'password', 6);
        $this->v->rule('lengthMax', ['username', 'firstname', 'lastname', 'password'], 30);

        // Prevent any doublon in the DB

        // code ...

        if ($this->v->validate()) {

            // authenticate user

            Auth::set();
            header("Location: /welcome");


            //TEST--------------------------------------------
            $this->zungvi->send($data['email']); 
            //TEST-----------------------------------------------


            exit;
        } else {
            $_SESSION['signup']['errors'] = $this->v->errors();
            $_SESSION['signup']['user'] = $this->Post;
            header('Location: /signup');
            exit;
        }
    }

    public function connexion($data = []): void
    {
        // valid user s inputs

        $this->v->rule('required', ['username', 'password', '_auth']);
        $this->v->rule('length', '_auth', 53);
        if (!password_verify('auth', '$2y$10$' . $this->Post['_auth'])) {
            $this->v->error('_auth', 'Wrong authentication');
        }
        $this->v->rule('lengthMin', 'username', 3);
        $this->v->rule('lengthMin', 'password', 6);
        $this->v->rule('lengthMax', ['username', 'password'], 30);

        // check user login authenticity

        // code ...

        if ($this->v->validate()) {

            // authenticate user

            Auth::set();
            // header("Location: /welcome");


            //TEST--------------------------------------------
            $this->gmail->send($data['username']);
            //TEST-----------------------------------------------

            
            exit;
        } else {
            $_SESSION['connexion']['errors'] = $this->v->errors();
            $_SESSION['connexion']['user'] = $this->Post;
            header('Location: /connexion');
            exit;
        }
    }
}
