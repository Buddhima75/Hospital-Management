<?php
 @include'../config.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Dashboard</title>
        <link rel="icon" href="../Images\logo3.png"  type="image/png">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link res="stylesheet" href="adminDash.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        
        
        <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            
            height: 130%;
        }

        #dashco {
            background-color: #ADD8E6;
            
            text-align: center;
            font-weight: bold;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
        .well{
            cursor:pointerr;
            
        }

        </style>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <h2>BBC Hospital</h2><br><br>
                    <img style="width:150px; height:150px ;margin-top:-43px ;" src="../Images\logo3.png">
                    
                    <ul class="nav nav-pills nav-stacked">
                     <br><li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="../Admin\Patient\patient.php">Patient management</a></li>
                        <li><a href="../Admin\ICU\icu.php">ICU management</a></li>
                        <li><a href="../Admin\Vaccination\testing.php">Vaccination</a></li>
                        <li><a href="../Admin\Stock\stock.php">Stock management</a></li>
                        <li><a href="../Admin\Appointment\Appoint.php">Appointment</a></li>
                        <li><a href="../Admin\bill\form.php">Medicine Form</a></li>
                        <li><a href="../Admin\bill\bill.php">Bill</a></li>
                        <li><a href="../Admin\Medicine/Medicine.php">Medicine</a></li>
                        <li><a href="../login/login.html" id="logout">Logout</a></li>
                    </ul><br>
                </div>
                <br>

                <div class="col-sm-9">
                    <div class="well" id="dashco">
                        <h4>BBC Hospital Super Admin Dashboard</h4>
                        <p>Summary</p>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <h4 style="text-align:center;">PATIENTS</h4><br>
                            <?php
                              
                              $sql = "SELECT * FROM patients";
                              if ($result=mysqli_query($conn,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                              echo "Total Number Of Patients : ".$rowcount;   
                            }?>
                            <br>

                            <?php
                              $sql1 = "SELECT * FROM patients where patient_state = 'critical' ";
                              if ($result=mysqli_query($conn,$sql1)) {
                                $rowcount1=mysqli_num_rows($result);
                                 echo"<hr>";
                                 echo "<p style='color:red;font-size:15px;'>Number Of Critical Patients  $rowcount1</p> "; 
                              }
                          ?>





                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4 style="text-align:center;">STAFF</h4><br>
                            <?php
                              $sql = "SELECT * FROM staff";
                              if ($result=mysqli_query($conn,$sql)) {
                             $rowcount=mysqli_num_rows($result);
                               echo "Total Number Of Staffs : ".$rowcount; 
                              }?>
                            <br />
                           
                        </div>
                    </div>




                    <div class="col-sm-3">
                        <div class="well">
                            <h4 style="text-align:center;"> VACCINATION CASES</h4><br>
                            <?php
                                $sql = "SELECT * FROM testing";
                                if ($result=mysqli_query($conn,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                 echo "Total Number Of tests : ".$rowcount; 
                            }?>
                        </div>
                    </div>






                    <div class="col-sm-3">
                        <div class="well">
                            <h4 style="text-align:center;">ICU BEDS</h4><br>
                            <?php
                                $sql = "SELECT * FROM icu";
                                if ($result=mysqli_query($conn,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                $count=15- $rowcount;
                                if($count < 10){
                                  echo "<p style='color:red;font-size:20px;'>Bed count is less than 15 ! <br></p> ";
                                }
                                 echo "Total Number Of Beds available: ".$count; 
                            }?>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="well">
                        <h4 style="text-align:center;"> STOCKS</h4><br>
                        <?php
                            $query = "SELECT name, quantity FROM stock";
                            $result = mysqli_query($conn, $query);

                            $medicineData = array();
                            while ($row = mysqli_fetch_assoc($result)) {
                                $medicineData[] = $row;
                            }

                            $result = $conn->query($sql1);
                            while ($row = $result->fetch_assoc()) {
                               
                            }
                        ?>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                            foreach ($medicineData as $medicine) {
                                                            echo '<tr>';
                                                            echo '<td >' . $medicine['name'] . '</td>';
                                                            echo '<td align="right" >' . $medicine['quantity'] . '</td>';
                                                            echo '</tr>';
                                                        }
                            ?>
                            </tbody>
                      </table>
                    </div >
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="well"><br>
                            <?php
                                $sql1 = "SELECT full_name FROM staff where job_role='doctor'  ";
                                $result = $conn->query($sql1);
                                while($row = $result->fetch_assoc()) {
                                 echo "DOCTOR NAME  :  " . $row["full_name"]. "<br>";
                                }
                  
                            ?>
                 <br><br>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <?php
                                echo "DAY SHIFT <br> <hr>";
                                $sql1 = "SELECT full_name FROM staff where duty_shift='day' ";
                                $result = $conn->query($sql1);
                                while($row = $result->fetch_assoc()) {
                                 echo "Name  : " . $row["full_name"]. "<br>";
                            }
                 
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <?php
                                echo "NIGHT SHIFT <br> <hr>";
                                $sql1 = "SELECT full_name FROM staff where duty_shift='night' ";
                                $result = $conn->query($sql1);
                                while($row = $result->fetch_assoc()) {
                                 echo "Name  : " . $row["full_name"]. "<br>";
                            }
                 
                            ?>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <br><br>

        

        
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
                      
                        'success'
                        )
                    }
                    }) 


                });

            });
        </script>
        
    </body>

</html>