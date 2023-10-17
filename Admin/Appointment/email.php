<!DOCTYPE html>
<html lang="en">
  <head>

  <title>BBC Admin</title>
  <link rel="icon" href="../../Images\logo3.png"  type="image/png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link res="stylesheet" href="../../AdminDashboard/adminDash.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 120%;
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
 
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 21px;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
            <li class="active"><a href="#">Appointment</a></li>
            <li ><a href="../../Admin\bill\form.php">Medicine Form</a></li>
            <li><a href="../../Admin\bill\bill.php">Bill</a></li>
            <li><a href="../../Admin\Medicine/Medicine.php">Medicine</a></li>

            <li><a href="../../login/login.html" id="logout">Logout</a></li>
          </ul><br>
          </div>
        <br>
      
      <div>
    
    <div class="col-sm-9" >
     
    <?php
        @include'../../config.php';

        
        $result = mysqli_query($conn,"SELECT * FROM appointment WHERE id='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($result);


      
    ?>
                                                
    <form method="post" action="send_mail.php">
        <label for="recipient">Recipient:</label>
        <input type="text" name="email" value="<?php echo $row['email'];?>" readonly>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" value="BBC Hospital Appointment Detailes" readonly>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" required></textarea>
        <br>
        <button class="btn btn-primary">Send</button><br><br>
        <a href="../Appointment/Appoint.php"><input type="button" class="btn btn-danger"value="Back"></a>
    </form>
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
