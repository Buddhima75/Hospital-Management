<?php 
              @include'../../../config.php';



 if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE doctor set id='" . $_POST['id'] . "', 
                                            name='" . $_POST['name'] . "', 
                                            time='" . $_POST['time'] . "', 
                                            type='" . $_POST['type'] . "' ,
                                            image='" . $_POST['image'] . "'

                                             WHERE id='" . $_POST['id'] . "'");
                        
                        $alert = "Doctor Update Successfully";

     header("Location: ../add.php?insertion=pass&alert=" . urlencode($alert));

    }

    $result = mysqli_query($conn,"SELECT * FROM doctor WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>BBC MainAdmin</title>
  <link rel="icon" href="../../Images\logo3.png"  type="image/png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: auto;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }

    th, td {
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color:  #3786bd;
    color: white;
    }
    #dashco{
      background-color: #ADD8E6;
      text-align: center;
      font-weight:bold;
    }
  </style>


</head>
<body>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>BBC Hospitals</h2>
      <img  style="width:150px; height:150px ;"  src="../../../Images/logo3.png">
      <ul class="nav nav-pills nav-stacked">
       <br><li ><a href="../../../Super AdminDashboard/adminDash.php">Dashboard</a></li>
       <li ><a href="../../../Super AdminDashboard\Admins\Add.php">Admins</a></li>
        <li ><a href="../../../Super AdminDashboard\Staff\staff.php">Doctor and staff Management</a></li>
        <li  class="active"><a href="">Doctors</a></li>

        <li><a href="../../../Super AdminDashboard\Patient\patient.php">Patient management</a></li>
        <li><a href="../../../Super AdminDashboard\ICU\icu.php">ICU management</a></li>
        <li ><a href="../../../Super AdminDashboard\Vaccination\testing.php"> vaccination</a></li>
        <li><a href="../../../Super AdminDashboard\stock\stock.php">Stock management</a></li>
        <li ><a href="../../../Super AdminDashboard\appoinment\Appoint.php">Appointment</a></li>
        <li ><a href="../../../Super AdminDashboard\feedback\feed.php">Feedback</a></li>
        <li><a href="../../../login\login.html" id="logout">Logout</a></li>

      </ul><br>
    </div>
    <br>
   
  
<div>
   
<div class="col-sm-9 " >



<form action="" method="POST" id="myform">
<div class="col-sm-6">
<div><?php if(isset($message)) { echo $message; } ?>
                    </div>
                    <div style="padding-bottom:5px;">
                    <!--<a href="retrieve.php">Employee List</a>-->
                    </div>
                    <h2><B>DOCTOR EDIT FORM</B></h2>
  
                    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['id'];?>" readonly >
      </div><br>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="userName" value="<?php echo $row['name'];?>" >
      </div><br>
      <div class="form-group">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" name="time" id="time" value="<?php echo $row['time'];?>">
      </div>
      <div class="mb-3">
        <label for="type"> Doctor Type </label><br>
        <select class="text" id="type" name="type" value="<?php echo $row['type'];?>">
                      <option value="Doctor">Doctors</option>
                      <option value="Specialization">Specialization</option>
                      
                      </select>
      </div><br>
      
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file"  accept="image/png, image/jpg, image/jpeg" class="form-control" name="image" id="image" value="<?php echo $row['image'];?>">
      </div>
      
      <br>
      <input type="submit" name="submit" class="btn btn-success" value="update">
     <a href="../add.php" ><input type="button" name="submit" class="btn btn-success" value="Back"></a>


    
  </form><br>
  <br>
  </div>
 
  <img src="../../../Doctor/uploaded_img/<?php echo $row['image']; ?>" height="300" alt="">
  
    </div>
  </div>
</div>


</body>
</html>
