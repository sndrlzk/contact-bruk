<?php

require '../vendor/autoload.php';
require 'iMailer.php';

class Mailer implements iMailer
{
    private $emailAddress = "USERNAME (eg: random@randomaddress.com)";
    private $password = "PASSWORD";
    private $host = "HOST";

    private $mailer;

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

        $this->mailer->isSMTP();
        $this->mailer->SMTPAuth = true;
        $this->mailer->Host = $this->host;
        $this->mailer->Username = $this->emailAddress;
        $this->mailer->Password = $this->password;

        $this->mailer->Body = $message;
        $this->mailer->AltBody = $message;
        $this->mailer->CharSet = 'UTF-8';

        $this->mailer->send();
    }


}