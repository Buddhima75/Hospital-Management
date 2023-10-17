<?php
                 @include'../../config.php';



if( isset( $_POST['submit'])) {

$item_id = $_POST["item_id"];
$name = $_POST["name"];
$category = $_POST["category"];
$brand = $_POST["brand"];
$quantity = $_POST["quantity"];



$sql="INSERT INTO `stock`(`id`,`name`,`category`,`brand`,`quantity`		
) 
       VALUES ('".$item_id."','".$name."','".$category."','".$brand ."','".$quantity."')";
        mysqli_query($conn,$sql);
}

header("Location: ../HTML/stock.php?insetion=pass");


?>


