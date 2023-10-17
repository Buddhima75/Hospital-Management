<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>BBC Hospital</title>
    <link rel="icon" href="../../Images\logo3.png"  type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link res="stylesheet" href="../../AdminDashboard/adminDash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
        height: 130%;
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
          <img  style="width:150px; height:150px ;"  src="../../Images\logo3.png">
          <ul class="nav nav-pills nav-stacked">
            <br><li ><a href="../../Super AdminDashboard\adminDash.php">Dashboard</a></li>
            <li><a href="../../Super AdminDashboard\Admins\Add.php">Admins</a></li>

            <li  class="active"><a href="#">Doctor and staff Management</a></li>
              <li><a href="../../Super AdminDashboard\Doctor\add.php">Doctors</a></li>
            <li><a href="../../Super AdminDashboard\Patient\patient.php">Patient management</a></li>
            <li><a href="../../Super AdminDashboard\ICU\icu.php">ICU management</a></li>
            <li ><a href="../../Super AdminDashboard\Vaccination\testing.php"> vaccination</a></li>
            <li ><a href="../../Super AdminDashboard\stock\stock.php">Stock management</a></li>
            <li><a href="../../Super AdminDashboard\appoinment\Appoint.php">Appointment</a></li>
            <li><a href="../../login/login.html" id="logout">Logout</a></li>
                      
          </ul><br>
        </div>
        <br>
      
        <div>
      
      <div class="col-sm-9" >
      <div class="well">
        <table>
          <tr>
            <td>
                  <div class="well" id="dashco">
              
                  <h3 class="empal">STAFF INFO</h3> 
                
                  <div>
              <form class="form-inline" method="POST" action=""><input type="text" 
              name="search" class="form-control" placeholder="Search..">
              <button type="submit" name="save" class="btn btn-primary">Search</button></form>
              </div>
                </div>
              <div>

          <?php
                        @include'../../config.php';

              if( isset( $_POST['search']))
              {
              $search = $_POST["search"]; 
              $sql = "SELECT * FROM `staff` WHERE `id_number` LIKE '%".$search."%'
              OR `full_name` LIKE '%".$search."%' OR `job_role` LIKE '%".$search."%'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) 
              {
              echo "
              <table class='table3' border=1>
              <tr>
              <th>id_number</th>
              <th>full_name</th>
              <th>job_role</th>
              <th>age</th>
              <th>home_address</th>
              <th>telephone_number	</th>
              <th>duty_shift</th>
              </tr>
              ";
              while($row = mysqli_fetch_assoc($result)) 
              {
              echo"<br><br>";echo "<tr>
              <td>".$row["id_number"]."</td>
              <td>".$row["full_name"]."</td>
              <td>".$row["job_role"]."</td>
              <td>".$row["age"]."</td>
              <td>".$row["home_address"]."</td>
              <td>".$row["telephone_number"]."</td>
              <td>".$row["duty_shift"]."</td>
              ";

              }
              echo "</table>";
              } else {
              echo "0 results";
              }
            }
          ?>
        </table>
        

      </div>



        <br>
        <?php


          $result = mysqli_query($conn,"SELECT * FROM staff");
        ?>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>

            <table>
              <tr>
                <td>ID Number</td>
              <td>Full Name</td>
              <td>Job Role</td>
              <td>Age</td>
              <td>Home Address</td>
              <td>Telephone Number</td>
              <td>Duty Shift</td>
              <td>Action</td>
              </tr>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
              <tr>
                <td><?php echo $row["id_number"]; ?></td>
                <td><?php echo $row["full_name"]; ?></td>
                <td><?php echo $row["job_role"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
              <td><?php echo $row["home_address"]; ?></td>
              <td><?php echo $row["telephone_number"]; ?></td>
              <td><?php echo $row["duty_shift"]; ?></td>
              
              <td><a href="PHP/updateStaff.php?id_number=<?php echo $row["id_number"]; ?>" class="btn btn-primary  btn-sm">Update</a>
              <a href="PHP/deleteStaff.php?id_number=<?php echo $row["id_number"]; ?>" id="delete" class="btn btn-danger  btn-sm">Delete</a></td>
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
          <br>
        <button class="btn btn-success">  <a style="text-decoration:none; color:white;" href="addStaff.html"> Add Staff</a>


        </div>
      </div>
    </div>
      
  </body>

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
    
</html>
