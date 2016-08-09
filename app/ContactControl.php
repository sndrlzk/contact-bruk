<?php

/**
 * Primitive controller for handling post request from the contact form
 */

require '../vendor/autoload.php';


if(isset($_SERVER['HTTP_REFERER']))
{
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $message = $_POST['message'];
    if(isset($name) && isset($email) && isset($message))
    {
        $mailer = new Mailer();
//        $mailer->sendEmail($name, $email, $message);

        print_r($_POST);
    }
}

?>