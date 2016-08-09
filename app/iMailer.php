<?php
interface iMailer
{
    /**
     * @param $name - Clients's name
     * @param $to - Client's e-mail address
     * @param $message - Client's message
     * @return mixed
     */
    public function sendEmail($name, $to, $message);
}