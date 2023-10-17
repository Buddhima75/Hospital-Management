<?php



@include'../../config.php';


    $result = mysqli_query($conn,"SELECT * FROM register");

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `register` WHERE id = $delete_id ") or die('query failed');
        if($delete_query){
           header('location:Add.php');
           $message[] = 'product has been deleted';
        }else{
           header('location:Add.php');
           $message[] = 'product could not be deleted';
        };
     };
?>