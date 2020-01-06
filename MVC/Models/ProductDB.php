<?php 

    class ProductDB extends DB
    {
        public function getAllData(){
            $qr = "SELECT * FROM sanpham ";
            return mysqli_query($this->con , $qr);
        }

    }
    




?>