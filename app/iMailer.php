<?php
interface iMailer
{
    public function sendEmail($name, $to, $message);
}