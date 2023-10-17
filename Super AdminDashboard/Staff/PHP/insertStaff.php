<?php
        @include'../../../config.php';




        if( isset( $_POST['submit'])) {

        $id_number = $_POST["id_number"];
        $full_name = $_POST["full_name"];
        $job_role = $_POST["job_role"];
        $age = $_POST["age"];
        $home_address = $_POST["home_address"];
        $telephone_number = $_POST["telephone_number"];
        $duty_shift	 = $_POST["duty_shift"];


        $sql="INSERT INTO `staff`(`id_number`,`full_name`,`job_role`,`age`,`home_address`,`telephone_number`,`duty_shift`	
        ) 
                VALUES ('".$id_number."','".$full_name."','".$job_role."','".$age ."','".$home_address."','".$telephone_number ."','".$duty_shift."')";
                mysqli_query($conn,$sql);
        }

        // header("Location: ../staff.php?insetion=pass");
        $alert = "Staff Added Successfully";

        header("Location: ../staff.php?insertion=pass&alert=" . urlencode($alert));



?>


