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
          width: 400px;
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
    <div class="container">
    <?php
    
    // Establish a connection to the MySQL database
    @include'../../config.php';


    // Retrieve the form inputs
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $patient_id = $_POST['patient_id'];

    // Check if the "Payment Status Update" button is clicked
    if (isset($_POST['update_payment_status'])) {
        // Update the payment status for the patient ID
        $update_sql = "UPDATE medicine SET payment_status = 'paid' WHERE patient_id = '$patient_id'";
        $conn->query($update_sql);

        echo "<script>alert('Payment status updated successfully.');</script>";
    }

    // Query the database for the medicine data based on the patient ID and date range
    $sql = "SELECT * FROM medicine WHERE patient_id = '$patient_id' AND date BETWEEN '$start_date' AND '$end_date'";
    $result = $conn->query($sql);

    // Check if any records were found
    if ($result->num_rows > 0) {
        echo "<h2>Bill Details</h2>";
        echo "<table class='table'>";
        echo "<tr><th>Medicine</th><th>Quantity</th><th>Price</th></tr>";

        // Calculate the total price
        $total_price = 0;
        $isPaid = true; // Flag to track if all medicines are paid
        while ($row = $result->fetch_assoc()) {
            $quantity = $row['quantity'];
            $price = $row['price'];
            $medicine_name = $row['medicine_name'];
            $total_price += $quantity * $price;

            echo "<tr>";
            echo "<td>" . $row["medicine_name"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";

            if ($row['payment_status'] != 'paid') {
                $isPaid = false; // Set the flag to false if any medicine is not paid
            }
        }

        echo "</table>";
        echo "<p>Total Price: " . $total_price . "</p>";

        // Display the "Payment Status Update" button
        echo "<form method='POST' onsubmit='disableButton()'>";
        echo "<input type='hidden' name='start_date' value='$start_date'>";
        echo "<input type='hidden' name='end_date' value='$end_date'>";
        echo "<input type='hidden' name='patient_id' value='$patient_id'>";
        echo "<input type='submit' name='update_payment_status' value='Payment is successful' id='submitBtn'>";
        echo "</form>";

        // Disable the submit button if all medicines are paid
        if ($isPaid) {
            echo "<script>document.getElementById('submitBtn').disabled = true;</script>";
        }
      } else {
          echo "No records found for the given patient ID and date range.";
      }

      // Close the database connection
      $conn->close();
      ?>

      

  </body>
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
