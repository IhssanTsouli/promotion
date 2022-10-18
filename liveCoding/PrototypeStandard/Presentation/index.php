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
$GetData=$promotionM->getAllPromotion();
?>
<a href="Ajouter.php">Ajouter</a>
<table>
    <thead>
        <tr>
            <th scope ="col">Id</th>
            <th scope ="col">Name</th>
            <th scope ="col">Contolles</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
            foreach($GetData as $item){
                
                ?>
               <tr>

              <td><?php echo $item->getId()?> </td>
              <td><?php echo $item->getName()?> </td>
              <td >
               <a href="Delete.php?id=<?php echo $item->getId()?>"> Delete</a>
               <a href="Edit.php?id=<?php echo $item->getId()?>"> Edit</a>
              </td>
              </tr>
            <?php }
            ?>
        
    </tbody>
</table>

</body>
</html>