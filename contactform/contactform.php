<?php
    $nombre = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $mensaje = strip_tags($_POST['message']);
    $fecha = time();
    $fechaFormateada = date("j/n/Y", $fecha);
    $textoEmisor = "MIME-VERSION: 1.0\r\n";
    $textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
    $textoEmisor .= "From: Formulario creado por DarioBF - www.dariobf.com";
    $correoDestino = "info@bolsavegetaldemaiz.cl";
    $asunto = "Contacto WEB" . $nombre ."- " . $email;
mail( $correoDestino, $asunto, $mensaje, $email);
echo'<script type="text/javascript">
    alert("Mensaje enviado correctamente, te responderemos a la brevedad");
    window.location.href="../index.html";
    </script>';

?>