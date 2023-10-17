<?php
               @include'../../../config.php';



if( isset( $_POST['submit'])) {

$nic = $_POST["nic"];
$name = $_POST["name"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$brand = $_POST["brand"];
$first_dose_date = $_POST["first_dose_date"];
$price = $_POST["price"];


$sql="INSERT INTO `testing`(`nic`,`name`,`address`,`contact`,`brand`,`first_dose_date`,`price`) 
       VALUES ('".$nic."','".$name."','".$address."','".$contact."','".$brand."','".$first_dose_date."','".$price."')";
        mysqli_query($conn,$sql);
}

// header("Location:../testing.php?insetion=pass");
$alert = "Record Modified Successfully";

header("Location: ../testing.php?insertion=pass&alert=" . urlencode($alert));




?>


