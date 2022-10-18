<?php
require_once '../Managers/PromotionManager.php';
$promotionM= new PromotionManager();

if(!empty($_POST)){
    $promotion = new Promotion();
    $promotion->setName($_POST['name']);
    $promotionM->AddPromotion($promotion);
    
}

?>
 <form action="Ajouter.php" method="POST">
    <input type="text" name="name">
    <button type="submit"> Ajouter</button>
 </form>