<?php

declare(strict_types=1);

namespace app\api\mail;

use app\static\Env_;
use GuzzleHttp\Client;
use PHPMailer\PHPMailer\PHPMailer;

abstract class Mail
{
    public array $env;
    public PHPMailer $mail;

    public function __construct()
    {
        $this->env = Env_::env();
        $this->mail = new PHPMailer();
    }

    public function validate_email($email): string 
    {
        $env = $this->env;

        $client = new Client();
        $query = [
            'api_key' => $env['ZERO_API_KEY'],
            'email' => $email
        ];

        // Try to make a async method instead with Guzzle to not slow down the app ... 
        $response = $client->request('GET', 'https://zerobounce1.p.rapidapi.com/v2/validate?' . http_build_query($query), [
            'headers' => [
                'X-RapidAPI-Host' => 'zerobounce1.p.rapidapi.com',
                'X-RapidAPI-Key' => $env['RAPID_API_KEY'],
            ],
        ]);

        return (string) $response->getBody();
    }
}
