<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>BBC MainAdmin</title>
    <link rel="icon" href="../../Images\logo3.png"  type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link res="stylesheet" href="../../Admin/adminDash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    
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
                            <li ><a href="../../Admin\bill\form.php">Medicine Form</a></li>
                            <li class="active"><a href="#">Bill</a></li>
                            <li><a href="../../Admin\Medicine/Medicine.php">Medicine</a></li>

                            <li><a href="../../login/login.html" id="logout">Logout</a></li>
                        </ul><br>
                    </div>
        <br>
      
    <div>
   
    <div class="row" >
      <div class="col-md-4">
        <div class="container">
          <h2>Generate Bill</h2>
          <form method="POST" action="generate_bill.php">
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" class="form-control" name="start_date"  required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date:</label>
                <input type="text" class="form-control" name="end_date" value="<?php echo date('Y-m-d'); ?>" >
            </div>
            <div class="form-group">
                <label for="patient_id">Patient ID:</label>
                <input type="text" class="form-control" name="patient_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
          </form>
        </div>

        
        <br>
        <br>
    </div>

        
    <div class= "col-md-4" style="background-color:#bbb;">
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
                  @include'../../config.php';

              if( isset( $_POST['search']))
              {
              $search = $_POST["search"]; 
              $sql = "SELECT * FROM `medicine` WHERE `patient_id` LIKE '%".$search."%'
              OR `patient_name` LIKE '%".$search."%'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) 
              {
              echo "<table class='table3' border=1> 
              <tr>
                <th>Patient_ID</th>
                <th>Patient Name</th>
                <th>Date of Admission</th>
                <th>Payment</th>
              
              </tr>
              ";
              while($row = mysqli_fetch_assoc($result)) 
              {
              echo"<br><br>";echo "<tr>
                  <td>".$row["patient_id"]."</td>
                  <td>".$row["patient_name"]."</td>
                  <td>".$row["admission_date"]."</td>
                  <td>".$row["payment_status"]."</td>

                  
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
      </table>
            
        
              
          

        
      </div>
    </div>

    <script>
      $(function(){
        $(document).on('click','#delete',function(e){
          e.preventDefault();
          var link = $(this).attr("href");


          Swal.fire({
            title: 'Are you sure?',
            text: "Delete This Data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
          }) 


        });

      });
    </script>
      
    <script>
    $(function(){
      $(document).on('click','#logout',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
          title: 'Are you sure?',
          text: "Logout?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Logout Now!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
              'Logout!',
              // 'You file has been deleted.',
              'success'
            )
          }
        }) 


      });

    });
  </script>
  </body>
</html>
