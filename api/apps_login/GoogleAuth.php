<?php

declare(strict_types=1);

namespace app\api\apps_login;

use app\api\Apps_Login_Interface;

class GoogleAuth extends AppsLogin implements Apps_Login_Interface
{

    public function authenticate(): bool
    {
        return true;
    }
}
