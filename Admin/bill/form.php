<?php
  // Create a database connection
  @include'../../config.php';

  // Retrieve the medicine names from the stock table
  $query = "SELECT name FROM stock";
  $result = mysqli_query($conn, $query);

  // Fetch the medicine names into an array
  $medicineNames = array();
  while ($row = mysqli_fetch_assoc($result)) {
      $medicineNames[] = $row['name'];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>BBC MainAdmin</title>
    <link rel="icon" href="../../Images\logo3.png"  type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link res="stylesheet" href="../../AdminDashboard/adminDash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const alertMessage = urlParams.get('alert');
            if (alertMessage) {
                alert(alertMessage);
            }
        }
    </script>
    
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
      .column {
       float: left;
    
        padding: 10px;
        height: 400px; /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .container {
        width: 300px;
      }
    </style>


  </head>
<body>

<div class="container-fluid">
  <div class="row content">
  <div class="col-sm-3 sidenav hidden-xs">
      <h2>BBC Hospital</h2><br><br>
      <img style="width:150px; height:150px ;margin-top:-43px ;" src="../../Images\logo3.png">
      
      <ul class="nav nav-pills nav-stacked">
        <br><li><a href="../../Admin\adminDash.php">Dashboard</a></li>
          <li><a href="../../Admin\Patient\patient.php">Patient management</a></li>
          <li><a href="../../Admin\ICU\icu.php">ICU management</a></li>
          <li><a href="../../Admin\Vaccination\testing.php">Vaccination</a></li>
          <li><a href="../../Admin\Stock\stock.php">Stock management</a></li>
          <li ><a href="../../Admin\Appointment\Appoint.php">Appointment</a></li>
          <li class="active"><a href="../../Admin\bill\form.php">Medicine Form</a></li>
          <li ><a href="../../Admin\bill\bill.php">Bill</a></li>
          <li><a href="../../Admin\Medicine/Medicine.php">Medicine</a></li>

          <li><a href="../../login/login.html" id="logout">Logout</a></li>
      </ul><br>
  </div>
   <br>
  
<div>
   
<div class="row" >
  <div class="col-md-4">
    <div class="container">
      <h1>Medicine Submission Form</h1>
  
      <form action="form_submitting.php" method="POST">
  
        <div class="form-group">
          <label for="patientId">Patient ID:</label>
          <input type="text" class="form-control" id="patientId" name="patientId" required>
        </div>

        <div class="form-group">
          <label for="patientName">Parient Name:</label>
          <input type="text" class="form-control" id="patientName" name="patientName" required>
        </div>

        <div class="form-group">
          <label for="admissionDate">Admission Date</label>
          <input type="date" class="form-control" id="datepicker" name="admissionDate"  required>
        </div>
  
        <div class="form-group">
          <label for="medicineName">Medicine Name:</label>
          <select class="form-control" name="medicineName" required>
            <option value="">Select</option> 
            <?php
            foreach ($medicineNames as $medicine) {
            echo '<option value="' . $medicine . '">' . $medicine . '</option>';
            }
            ?>
          </select>
        </div>
  
        <div class="form-group">
          <label for="price">Medicine Price:</label>
          <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
          <label for="date">Date:</label>
          <input type="text" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
        </div>
  
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

      
      <br>
      <br>
  </div>
     
  <div class= "col-md-4" style="background-color:#bbb;">
    <!-- <form>
    <?php

     

      $result = mysqli_query($conn,"SELECT * FROM patients");
    ?>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>

    <table>
      <tr>
          <td><B>Patient_ID</B></td>
      
        <td><B>Patient Name</B></td>
        <td><B>Date of Admission</B></td>
    
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
          <td><?php echo $row["patient_id"]; ?></td>
          <td><?php echo $row["patient_name"]; ?></td>
          <td><?php echo $row["patient_admission"]; ?></td>
         
    </tr>
    <?php
    $i++;
    }
    ?>
  </table>
  <?php
    }
    else
    {
        echo "No result found";
    }
  ?>

  </div>
  </form>
           -->

        
        <table>
          <tr>
            <td>
                <div class="well" id="dashco">
                  <h3 class="empal">PATIENT INFO</h3>
                  <!--search-->
                  <div>
                    <form class="form-inline" method="POST" action=""><input type="text"  name="search" class="form-control" placeholder="Search..">
                    <button type="submit" name="save" class="btn btn-primary">Search</button></form>
          
                  </div>
                </div>
              <div>

                <?php
              
              if( isset( $_POST['search']))
              {
              $search = $_POST["search"]; 
              $sql = "SELECT * FROM `patients` WHERE `patient_id` LIKE '%".$search."%'
              OR `patient_name` LIKE '%".$search."%'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) 
              {
              echo "
              <table class='table3' border=1>
              <tr>
              <th>Patient_ID</th>
              
              <th>Patient Name</th>
              
              <th>Date of Admission</th>
            
              </tr>
              ";
              while($row = mysqli_fetch_assoc($result)) 
              {
              echo"<br><br>";echo "<tr>
                  <td>".$row["patient_id"]."</td>
                 
                  <td>".$row["patient_name"]."</td>
                  
                  <td>".$row["patient_admission"]."</td>
                     
                  ";
              }
              echo "</table>";
              } else {
              echo "0 results";
              }
              }
              ?>
        </table>
        </td></tr>		
        </tr>
      </table> </center>
    </div>
    
       

    
  </div>
</div>

 

  </body>
  
</html>
