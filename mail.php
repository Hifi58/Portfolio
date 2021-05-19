<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if(isset($message)){
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header.= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header.= 'From: ' . $email . "\r\n";
    
    $message = '<h1>Message envoyé depuis mon portfolio</h1>
    <p><b>Nom :</b>' . $name . '<br>
    <b>Email :</b>' . $email . '<br>
    <b>Message :</b>' . $message . '</p>';

    $return = mail('t.gillet@codeur.online', 'Envoi depuis page de', $message, $header);
    if($return){
        echo("<script LANGUAGE='JavaScript'>
                window.alert('Message envoyé avec succès !');
                window.location.href='index.php';
                </script>");
    }
}

