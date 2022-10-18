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
    public function getAllPromotion(){
        $myConnection = new MyConnection();
        $req= "select * from promotion ";
        $query=mysqli_query($myConnection->connect(),$req);
        $GetData=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $array= array();
        foreach($GetData as $item)
        {
            $promotion = new Promotion();
            $promotion->setId($item['id']);
            $promotion->setName($item['name']);
            array_push($array,$promotion);
        }
        return $array;

    }
    public function Delete($id){
        $myConnection = new MyConnection();
        $req="delete from promotion where id='$id'";
        mysqli_query($myConnection->connect(), $req);
    

    }
    public function GetPromotion($id){
        $myConnection = new MyConnection();
        $req="select * from promotion where id='$id'";
        $query = mysqli_query($myConnection->connect(), $req);
        $GetData=mysqli_fetch_all($query,MYSQLI_ASSOC);
        foreach($GetData as $item)
        {
            $promotion = new Promotion();
            $promotion->setId($item['id']);
            $promotion->setName($item['name']);
            
        }
        return $promotion;

    }


    public function EditData($id,$name)
    {
        $myConnection = new MyConnection();
        $req="update promotion set name='$name' where id='$id'";
        mysqli_query($myConnection->connect(), $req);
    }
}


?>