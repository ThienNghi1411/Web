<?php 
include ("./connect.php");

$user = $_POST["user"];
$password = $_POST["password"];

    $qr = "SELECT * FROM dangnhap WHERE user == '$user' and password == '$password' ";
    $result = mysqli_query($conn,$qr);
    if(mysqli_fetch_assoc($result) == 0){



        





        echo "Tài khoản hoặc mật khẩu không đúng";

    }


?>