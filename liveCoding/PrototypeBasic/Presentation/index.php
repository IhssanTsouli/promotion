<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once '../Managers/PromotionManager.php';
$promotionM= new PromotionManager();
if(!empty($_POST)){
    $promotion= new Promotion();
    $promotion->setName($_POST['name']);
    $promotionM->AddPromotion($promotion);


}

?>
    
<h1>ajouter promotion</h1>
<form action="index.php" method="post">
    promotion: <input type="text" name="name" >
    <button type="submit">Envoyer</button>

</form>

</body>
</html>