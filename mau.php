<?php


$email = $_POST["email"];
$tong = $_POST["tong"];
$review = $_POST["review"];

require 'PHPMailer/PHPMailerAutoload.php';
$mail->CharSet = "UTF-8"; 

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
    $mail ->Body ="<p style='font-family: Times New Roman'>". $email. "đã gửi 1 tin nhắn:" .$review."<p>";
    $email = "concockun@gmail.com";
}

$mail ->AddAddress($email);


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>