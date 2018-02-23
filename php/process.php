<?php
    $name = strip_tags($_POST['name']);
    $mail = strip_tags($_POST['mail']);
    $text = strip_tags($_POST['text']);
    $date = time();
    $formattedDate = date("j/n/Y", $date);
    $senderText = "MIME-VERSION: 1.0\r\n";
    $senderText .= "Content-type: text/html; charset=UTF-8\r\n";
    $senderText .= "From: Formulario creado por DarioBF - www.dariobf.com";
    $destinationMail = "sebastian.rodriguezb@sansano.usm.cl";
    $affair = "Contacto WEB" . $name . $mail;

mail( $destinationMail, $afair, $text);

header("Location: ../templates/contact/contact.html");

?>