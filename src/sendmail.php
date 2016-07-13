<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$tfn1 = $_POST['tfn1'];
$tfn2 = $_POST['tfn2'];
$comentarios= $_POST['comentarios'];

$to = "pepeblascondc@gmail.com";
$subject ="formulario web test";
$body =" Mensaje automático, información: \n \n Nombre: $nombre \n Apellidos: $apellido \n mail: $mail \n Teléfonos: $tfn1 , $tfn2 \n ------- \n Comentarios: \n $comentarios";

mail($to, $subject, $body);

?>
