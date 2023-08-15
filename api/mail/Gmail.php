<?php

declare(strict_types=1);

namespace app\api\mail;

use app\api\mail\Mail;
use app\api\Mail_Interface;
use app\model\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Gmail extends Mail implements Mail_Interface
{

    public function send($to, $subject = 'Password Reset', $html = 'password'): bool
    {
        $env = $this->env;

        // Valid email
        $tto = json_decode($this->validate_email($to), true);
        if ($tto['status'] == 'valid') {

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

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $htmll = View::getHtml($html, 'email');
            $this->mail->Body    = $htmll;

            // Send Email
            return $this->mail->send();
        }
    }
}
