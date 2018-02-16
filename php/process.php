<?php
    $nombre = strip_tags($_POST['nombre']);
    $email = strip_tags($_POST['email']);
    $mensaje = strip_tags($_POST['mensaje']);
    $fecha = time();
    $fechaFormateada = date("j/n/Y", $fecha);
    $textoEmisor = "MIME-VERSION: 1.0\r\n";
    $textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
    $textoEmisor .= "From: Formulario creado por DarioBF - www.dariobf.com";
    $correoDestino = "sebastian.rodriguezb@sansano.usm.cl";
    $asunto = "Contacto WEB_" . $nombre;

mail( $correoDestino, $asunto, $mensaje);
header("Location: ../templates/contact/contact.html");
?>