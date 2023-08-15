<?php

declare (strict_types = 1);

namespace app\api\apps_login;

use app\static\Env_;
use GuzzleHttp\Client;
use PHPMailer\PHPMailer\PHPMailer;

abstract class AppsLogin {

    public array $env;
    public Client $client;
    public PHPMailer $mailer;

    public function __construct()
    {
        $this->env = Env_::env();
        $this->mailer = new PHPMailer();
    }
}