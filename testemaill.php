<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'nilakone@verisette.com';
$mail->Password = 'Ss0102030';
$mail->SetFrom('no-reply@verisette.com');
$mail->Subject = 'Hello World';
$mail->Body = 'A test email';
$mail->AddAddress('yurnerodoto@gmail.com');

$mail->Send();
?>