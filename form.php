<?php

$name = $_POST ['name'];
$mail = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

//como me va a llegar el cuerpo del mensaje

$header = 'from' . $mail . ",\r\n";
$header = "X-Mailer: PHP/" . phpversion() . ",\r\n";
$header = "Content-Type: text-plain";


$message = "Este mensaje fue enviado por" . $name . ",\r\n";
$message = "Su e-mail es: " . $mail . ",\r\n";
$message = "El asunto es: " . $subject . ",\r\n";
$message = "Mensaje: " . $_POST['message'] . ",\r\n";
$message = "Enviado el " . date('d/m/Y', time());


$para = 'leon.mmlucia@gmail.com';
$asunto = 'Este email fue enviado desde tu portfolio';

$mail = mail($para, $asunto, utf8_decode($message), $header);

if($mail) {
    echo "<h4> mail enviado </4>";
}

header('Location:exito.html');
?>

