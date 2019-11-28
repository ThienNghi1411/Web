<?php
include("./connect.php");
$email = $_POST["email"];
$tong = $_POST["tong"];
require 'PHPMailer/PHPMailerAutoload.php';
var_dump($email);
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

$mail ->Body ='<h1>Bạn đã đặt hàng thành công với giá '.$tong.'</h1>';
if(isset($_POST["review"])){
    $mail ->Body =$_POST["review"];
}
$mail ->AddAddress($email);


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>