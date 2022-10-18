<?php
require_once '../Managers/PromotionManager.php';
$promotionM= new PromotionManager();
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $promotionM->Delete($id);
    header("Location:index.php");
}
?>
    

