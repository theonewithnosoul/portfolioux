<?php

$nombre = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

//como me va a llegar el cuerpo del mensaje

$message = "Este mensaje fue enviado por" .$nombre. ",\r\n";
$message = "Su e-mail es: " .$email. ",\r\n";
$message = "El asunto es: " .$subject. ",\r\n";
$message = "Mensaje: " . $_POST ['mensaje'] . ",\r\n";
$message = "Enviado el " . date('d/m/y', time());

$header = "Reply-to: leon.mmlucia@gmail.com"
$header = "X-Mailer: PHP/" . phpversion();

$destinatario = 'leon.mmlucia@gmail.com';
$asunto = 'Este email fue enviado desde tu portfolio';

$mail = @mail($destinatario,$asunto, utf8_decode($message),$header);

if($mail) {
    echo "<h4> mail enviado </4>";
}

header('Location:exito.html');
?>

