<?php
                 @include'../../config.php';



if( isset( $_POST['submit'])) {

$icu_bed_number  = $_POST["icu_bed_number"];
$availability = $_POST["availability"];
$patient_id = $_POST["patient_id"];
$patient_nic = $_POST["patient_nic"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];



$sql="INSERT INTO `icu`(`icu_bed_number`,`availability`,`patient_id`,`patient_nic`,`address`,`contact_number`) 
       VALUES ('".$icu_bed_number."','".$availability."','".$patient_id."','".$patient_nic."','".$address."','".$contact_number."')";
        mysqli_query($conn,$sql);
}

$alert = "Record Modified Successfully";

header("Location: icu.php?insertion=pass&alert=" . urlencode($alert));


?>


