<?php
// http://localhost/live/Home/Show/1/2
class product_admin extends Controller{
    function Show(){
        $tmp = $this->model("ProductDB");
        $qr = $tmp->getAllData();
        $this->view("Admin", [
            "data"=>$qr
        ]);

        
    }


    
        
}
?>