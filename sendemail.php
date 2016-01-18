<?php
require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'repositioweb@gmail.com';                 // SMTP username
$mail->Password = '1075627303';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST["email"], $_POST["name"]);
$mail->addAddress('edwaramayadiaz@gmail.com', 'Edwar Amaya');

$mail->Subject = $_POST["subject"];
$mail->Body    = $_POST["message"];
$mail->AltBody = $_POST["message"];

if(!$mail->send()) {
   echo 'El mensage no pudo ser enviado.';
   echo 'Error: ' . $mail->ErrorInfo;
} else {
   echo 'Mensaje enviado exitosamente <a href="/">Volver</a>';
}
?>
