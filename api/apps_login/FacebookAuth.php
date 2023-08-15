<?php

declare (strict_types = 1);

use app\api\apps_login\AppsLogin;
use app\api\Apps_Login_Interface;

class FacebookAuth extends AppsLogin implements Apps_Login_Interface{
public function authenticate(): bool
{
    return false;
}
}