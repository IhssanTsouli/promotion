<?php

require_once '../Entite/Promotion.php';
require_once 'MyConnection.php';

class PromotionManager {

    public function AddPromotion($promotion){

        $myConnection = new MyConnection();


        $this->host="localhost";
        $this->user="root";
        $this->password="";
        $this->db="projet1";
    
        $conn= new mysqli($this->host,$this->user,$this->password,$this->db);
        
        


        $name=$promotion->getName();
        $req="insert into promotion(name) values('$name')";

  mysqli_query($conn,$req);




    }
}


?>