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
      <img  style="width:150px; height:150px ;"  src="../../Images/logo3.png">
      <ul class="nav nav-pills nav-stacked">
       <br><li ><a href="../../Super AdminDashboard/adminDash.php">Dashboard</a></li>
       <li  class="active"><a href="">Admins</a></li>
        <li ><a href="../../Super AdminDashboard\Staff\staff.php">Doctor and staff Management</a></li>
        <li><a href="../../Super AdminDashboard\Doctor\add.php">Doctors</a></li>

        <li><a href="../../Super AdminDashboard\Patient\patient.php">Patient management</a></li>
        <li><a href="../../Super AdminDashboard\ICU\icu.php">ICU management</a></li>
        <li ><a href="../../Super AdminDashboard\Vaccination\testing.php"> vaccination</a></li>
        <li><a href="../../Super AdminDashboard\stock\stock.php">Stock management</a></li>
        <li ><a href="../../Super AdminDashboard\appoinment\Appoint.php">Appointment</a></li>
        <li ><a href="../../Super AdminDashboard\feedback\feed.php">Feedback</a></li>
        <li><a href="../../login\login.html" id="logout">Logout</a></li>

      </ul><br>
    </div>
    <br>
  
<div>
   
<div class="col-sm-9" >

            <?php
              @include'../../config.php';


              $result = mysqli_query($conn,"SELECT * FROM register");
?>


        <form action="register.php" method="POST" id="myform">
          <h2>Register</h2>
            <div class="mb-3">
              <label for="userName" class="form-label">Name</label>
              <input type="text" class="form-control" name="userName"  id="userName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="mb-3">
              <label for="contct_no" class="form-label">Contct Number</label>
              <input type="number" placeholder="Your Phone Number EX:1234567890 "  pattern="[1-9]{1}[0-9]{9}"   maxlength="10" class="form-control" name="contct_no" id="contct_no" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

            </div><br>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address" required>
            </div>
            
            <br>
            <input type="submit" name="submit" class="btn btn-success" value="Register">

        </form><br><br>

          <section class="display-product-table">
                        <table>
                          <thead>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Contct Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>action</th>
                          </thead>
                          <tbody>
                            <?php
                              $select_register = mysqli_query($conn, "SELECT * FROM register");
                              if(mysqli_num_rows($select_register) > 0){
                              while($row = mysqli_fetch_assoc($select_register)){
                            ?>
                            <tr>
                              <td><?php echo $row["userName"]; ?></td>
                              <td><?php echo $row["password"]; ?></td>
                              <td><?php echo $row["contct_no"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td><?php echo $row["address"]; ?></td>
                              <td>
                                <a href="delete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" id="delete"> delete </a>
                              </td>
                            </tr>
                            <?php
                              };    
                              }else{
                                echo "<div class='empty'>no  added</div>";
                              };
                            ?>
                          </tbody>
                        </table>
                        
          </section>
       

    </div>
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
