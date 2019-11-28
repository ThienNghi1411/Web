<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host ='smtp.gmail.com';
$mail ->Port = 465;
$mail ->isHTML();
$mail ->Username ='thengansax613@gmail.com';
$mail ->Password ='evilmikun123';
$mail ->SetFrom('no-reply@howcode.org');
$mail ->Subject="tin nhan";
$mail ->Body ='<h1>coc</h1>';
$mail ->AddAddress('concockun@gmail.com');


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>