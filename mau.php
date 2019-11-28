<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail ->isSTMP();
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host ='smtp.gmail.com';
$mail ->Port = '465';
$mail ->isHTML();
$mail ->Username ='thengansax613@gmail.com';
$mail ->Password ='evilmikun123';
$mail ->SetFrom('no-reply@howcode.org');
$mail ->Subject="tin nhan";
$mail ->Body =' tieu de';
$mail ->AddAddress('thengansax612@gmail.com');
$mail ->Send();
?>