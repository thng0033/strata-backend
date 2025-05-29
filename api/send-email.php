<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'your@example.com';
$mail->Password = 'yourpassword';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your@example.com', 'Strata System');
$mail->addAddress('recipient@example.com');
$mail->Subject = 'Maintenance Request Submitted';
$mail->Body = 'We have received your request.';
$mail->send();
echo 'Email sent';
?>