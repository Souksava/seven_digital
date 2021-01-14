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
$mail->Subject = 'Orders Product';
$mail->Body = 'ມີໃບສະເໜີການສັ່ງຊື້ສິນຄ້າເລກທີ 001 ຜູ້ສັ່ງຊື້ແມ່ນ ສຸກສະຫວັດ';
$mail->AddAddress('souksavath@verisette.com');

$mail->Send();
?>