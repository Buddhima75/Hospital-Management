<?php


@include'../../config.php';


    $result = mysqli_query($conn,"SELECT * FROM doctor");

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `doctor` WHERE id = $delete_id ") or die('query failed');
        if($delete_query){
           header('location:add.php');
        }else{
           header('location:add.php');
           
        };
     };
?>