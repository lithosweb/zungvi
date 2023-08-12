<?php

namespace app\api;

use app\static\Env_;
use GuzzleHttp\Client;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Mail
{
    public array $env;
    public PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->env = Env_::env();
    }

    // PHPmailer
    public function send_mail($to)
    {
        $env = $this->env;

        try {
            // Server Settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mail->isSMTP();
            $this->mail->Host = $env['DRIVER_HOST'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $env['DRIVER_USRNAME'];
            $this->mail->Password = $env['DRIVER_PASSWORD'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port = $env['DRIVER_TLS_PORT'];

            // Recepients
            $this->mail->setFrom($env['DRIVER_MAIL'], $env['DRIVER_NAME']);
            $this->mail->addAddress($to);
            $this->mail->addCC($env['DRIVER_USERNAME']);

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = '<h3>Welcome</h3>'; // Need to load html view properly---
            $this->mail->Body    = '<div><p>Bienvenue sur Zungvi, le reseau social le plus etendu de l Est.</p><small>Regards, Zungvi.</small></div>';

            // Send Email
            $this->mail->send();
            echo 'Message Sent'; exit;
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

    public function send_gmail($to){
        $env = $this->env;

$tto = json_decode($this->check_validity($to), true);
if ($tto['status'] == 'valid'){

            // Server Settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mail->isSMTP();
            $this->mail->Host = $env['GMAIL_DRIVER_HOST'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $env['GMAIL_DRIVER_USERNAME'];
            $this->mail->Password = $env['GMAIL_DRIVER_PASSWORD'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port = $env['GMAIL_DRIVER_TLS_PORT'];

            // Recepients
            $this->mail->setFrom($env['GMAIL_DRIVER_USERNAME'], $env['GMAIL_DRIVER_NAME']);
            $this->mail->addAddress($to);
            $this->mail->addCC($env['GMAIL_DRIVER_USERNAME']);

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Welcome'; 
            $this->mail->Body    = 'Bienvenue sur Zungvi, le reseau social le plus etendu de l Est. </br>Regars, Zungvi'; // Need to load html view properly only for the email body...---

            // Send Email
            $this->mail->send();
            // echo 'Message Sent';    
} else {
    echo "Invalid Address"; 
} 

    }

    public function check_validity($email)
    {
        $env = $this->env;

        $client = new Client();
        $query = [
            'api_key' => $env['ZERO_API_KEY'],
            'email' => $email
        ];
        $response = $client->request('GET', 'https://zerobounce1.p.rapidapi.com/v2/validate?' . http_build_query($query), [
            'headers' => [
                'X-RapidAPI-Host' => 'zerobounce1.p.rapidapi.com',
                'X-RapidAPI-Key' => $env['RAPID_API_KEY'],
            ],
        ]);

        // echo $response->getBody();
        return $response->getBody();
    }
}
