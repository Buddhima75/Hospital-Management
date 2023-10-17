<?php
    @include'../config.php';



   

    if(isset($_POST['submit'])){


        $userName = $_POST['userName'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM register WHERE userName='$userName' and password='$password' ";
        $data = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($data);

        $sql = "SELECT * FROM super_admin WHERE user_name='$userName' and password='$password' ";
        $data = mysqli_query($conn,$sql);
        $result1 = mysqli_num_rows($data);


        if($result1)
        {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_type'] = 'admin';
			header("location: ../Super AdminDashboard/adminDash.php");
        
        } elseif ($result) {
            $_SESSION['user_id'] = $result1['id'];
            $_SESSION['user_type'] = 'user';
            // Redirect to user dashboard
			header("location: ../Admin/adminDash.php");
            
            // header("Location: user_dashboard.php");

         
           } else {
        // Display error message
        // header("location:login.html");
        $alert = "Incorrect Username Or Password";
        header("Location: login.html?insertion=pass&alert=" . urlencode($alert));
        }



    }
       















        
    
    
?>