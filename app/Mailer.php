<?php

require '../vendor/autoload.php';
require 'iMailer.php';

class Mailer implements iMailer
{
    private $mailer;
    private $emailAddress = "EMAIL_ADDRESS";

    public function __construct()
    {
        $this->mailer = new PHPMailer();
    }

    public function sendEmail($name, $to, $message)
    {
        $this->mailer->setFrom($this->emailAddress, "Contact Form - Bruk.hu");
        $this->mailer->addReplyTo($to, $name);
        $this->mailer->addAddress($this->emailAddress);
        $this->mailer->Subject = "New message from bruk.hu";

        $this->mailer->Body = $message;
        $this->mailer->AltBody = $message;
        $this->mailer->CharSet = 'UTF-8';

        $this->mailer->send();
    }


}