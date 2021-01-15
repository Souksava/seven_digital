<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'admin@sevendigital.la';
$mail->Password = 'Seven@1234';
$mail->SetFrom('no-reply@verisette.com');
$mail->Subject = 'Test Email';
$mail->Body = 'ມີໃບສະເໜີການສັ່ງຊື້ສິນຄ້າເລກທີ 001 ຜູ້ສັ່ງຊື້ແມ່ນ ສຸກສະຫວັດ';
$mail->AddAddress('souksavath@verisette.com');
$mail->AddAddress('sivilay.nilakone@gmail.com');
$mail->AddAddress('sivilay.nilakone@gmail.com');

$mail->Send();
?>