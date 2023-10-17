<?php
                 @include'../../config.php';




if( isset( $_POST['submit'])) {

$userName = $_POST["userName"];
$password = $_POST["password"];
$contct_no = $_POST["contct_no"];
$email = $_POST["email"];
$address = $_POST["address"];



$sql="INSERT INTO `register`(`userName`,`password`,`contct_no`,`email`,`address`
) 
       VALUES ('".$userName."','".$password."','".$contct_no."','".$email ."','".$address."')";
        mysqli_query($conn,$sql);
}

// header("Location: Add.php?insetion=pass");
$alert = "Admin Added Successfully";

header("Location: Add.php?insertion=pass&alert=" . urlencode($alert));



?>

