<?php

/**
 * Primitive controller for handling post request from the contact form
 */

require 'Mailer.php';

if(isset($_SERVER['HTTP_REFERER']))
{
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $message = $_POST['message'];

    $arr = array('result' => "ERROR");

    if(isset($name) && isset($email) && isset($message))
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $mailer = new Mailer();
            $mailer->sendEmail($name, $email, $message);
            $arr = array('result' => "SUCCESS");
            echo json_encode($arr);
        } else {
            echo json_encode($arr);
        }
    }else{
        echo json_encode($arr);
    }

}

?>