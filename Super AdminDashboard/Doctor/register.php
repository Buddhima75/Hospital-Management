<?php
                 @include'../../config.php';




   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $time = $_POST['time'];
      $type = $_POST['type'];
      $image = $_FILES['image']['name'];

      
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = 'uploaded_img/'.$image;
   
      // echo "$image_folder";

      $insert_query = mysqli_query($conn, "INSERT INTO `doctor`(name, time, type, image) VALUES('$name', '$time', '$type' , '$image')") or die('query failed');
   
      if($insert_query){
         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'product add succesfully';
      }else{
         $message[] = 'could not add the product';
      }
   };
   // header("Location:Add.php?insetion=pass");
   $alert = "Record Modified Successfully";

header("Location: add.php?insertion=pass&alert=" . urlencode($alert));





?>




