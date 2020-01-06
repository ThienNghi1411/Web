
<?php
    include("connect.php");
    $name = $_GET["name"];
    $qr = "SELECT * FROM sanpham WHERE name like '%$name%' LIMIT 0,5 ";
    $result = mysqli_query($conn, $qr);
    $array = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
  
           array_push($array,$row);
        }
        echo json_encode($array);
    }else {
        echo json_encode("");
    }
?>