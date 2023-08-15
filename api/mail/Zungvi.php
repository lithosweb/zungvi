<?php

declare(strict_types=1);

namespace app\api\mail;

use app\api\mail\Mail;
use app\api\Mail_Interface;
use app\model\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Zungvi extends Mail implements Mail_Interface
{
    public function send($to, $subject = 'Welcome', $html = 'Welcome to Zungvi'): bool 
    {
        // Valid email 
        $tto = json_decode($this->validate_email($to), true);
        if ($tto['status'] == 'valid') {

            $env = $this->env;

            // Server Settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mail->isSMTP();
            $this->mail->Host = $env['PHP_DRIVER_HOST'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $env['PHP_DRIVER_USERNAME'];
            $this->mail->Password = $env['PHP_DRIVER_PASSWORD'];
            // $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $this->mail->Port = $env['PHP_DRIVER_TLS_PORT'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->mail->Port = $env['PHP_DRIVER_SSL_PORT'];

            // Recepients
            $this->mail->setFrom($env['PHP_DRIVER_USERNAME'], $env['PHP_DRIVER_NAME']);
            $this->mail->addAddress($to);
            $this->mail->addCC($env['PHP_DRIVER_USERNAME']);

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject; // Need to load html view properly---
            $htmll = View::getHtml($html, 'email');
            $this->mail->Body    = $htmll;

            // Send Email
            return $this->mail->send();
        }
//     }
    }
}
