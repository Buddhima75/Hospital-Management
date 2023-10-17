<?php
        @include'../config.php';



        if( isset( $_POST['submit'])) {

                $name = $_POST["name"];
                $email = $_POST["email"];
                $number = $_POST["number"];




                $sql="INSERT INTO `feedback`(`name`,`email`,`number`) 
                VALUES ('".$name."','".$email."','".$number."')";
                mysqli_query($conn,$sql);
        }
        if ($condition) {
          echo '<script>alert("This is an alert box!");</script>';
        }

      $alert = "feedback Successfully";
         
      header("Location: feedback.html?insertion=pass&alert=" . urlencode($alert));

?>