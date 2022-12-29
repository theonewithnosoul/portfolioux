<?php

$nombre = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

//como me va a llegar el cuerpo del mensaje

$message = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$message = "Su e-mail es: " . $email . ",\r\n";
$message = "El asunto es: " . $subject . ",\r\n";
$message = "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$message = "Enviado el " . date('d/m/y', time());


$destinatario = 'leon.mmlucia@gmail.com';
$asunto = 'Este email fue enviado desde tu portfolio';

mail($destinatario, $asunto, utf8_decode($message), $header);

header('Location:exito.html');
?>

