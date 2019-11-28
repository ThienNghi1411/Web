<?php
    include("./connect.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $vote = $_POST["vote"] + 1 ;
    $review = $_POST["review"];
    $id_product = $_POST["id_product"];


    $qr = "INSERT INTO `review`( `id_product`, `name`, `email`, `vote`, `review`) VALUES ('$id_product','$name','$email','$vote','$review'";
    mysqli_query($conn,$qr);
    echo "Cảm ơn bạn đã đánh giá sản phẩm";
?>