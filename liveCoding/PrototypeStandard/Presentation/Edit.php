<?php
require_once '../Managers/PromotionManager.php';
$promotionM= new PromotionManager();
if(isset($_GET['id'])){
    $Data=$promotionM->GetPromotion($_GET['id']);


}
if(!empty($_POST)){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $promotionM->EditData($id,$name);
    
    header("Location:index.php");
}
?>
<form action="Edit.php" method="POST">

<input type="hidden" name="id" value="<?php echo $Data->getId()?>">

Name: <input type ="text" value=<?php echo $Data->getName()?> name="name">
<button>Update</button>

</form>