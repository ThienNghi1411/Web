<?php 

    class Database
    {
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'web';

        private $conn = NULl;
        private $result = NULL;

        public function Connect(){
            $this->conn = new mysqli($this->servername,$this-> username,$this->password ,$this-> dbname);
            if($this->conn){
                mysqli_set_charset($this->conn,'utf8');
            }else{
                echo "Kết nối thất bại ";
            }
            return $this->conn;
        }
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        public function getData(){
          
            if($this-> result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = -1 ;
            }
            return $data;
        }
        public function getAllData(){
           
            if($this->result){
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }else{
                $data = -1 ;
            }
            return $data;
        }
        public function insertProduct(){
            
        }








    }
    




?>