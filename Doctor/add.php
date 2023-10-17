<?php 
    @include'../config.php';


 $result = mysqli_query($conn,"SELECT * FROM doctor");


    $name = $_GET['name'];
    $time = $_GET['time'];
?>

<html>
    <head>
        <title> Appointment</title>
        <meta charset="utf-8">
        <title>Form-v4 by Colorlib</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
        <link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
        <!-- Jquery -->
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="AddPatient.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

   
   
    </head>
    <body>

        <div class="page-content">
            <div class="form-v4-content">
                <form  method="POST" action="" class="form-detail" id="myform">
                    <div><?php if(isset($message)) { echo $message; } ?>
                    </div>
                    <div style="padding-bottom:5px;">
            
                    </div>
            
                    <h2>Book Appointment</h2>
        
            
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <label for="Name">Name</label>
                            <input type="text" name="name" id="name" class="input-text">
                        </div>
                        <div class="form-row form-row-1">
                            <label for="NIC">NIC</label>
                            <input type="text" name="nic" id="nic" pattern="[0-9]{10}" minlength="10" maxlength="10" class="input-text" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="Patient_Name">Contct Number</label>
                        <input type="number" name="contct_no" placeholder="Your Phone Number EX:1234567890 " minlength="10"  pattern="[1-9]{1}[0-9]{9}"   maxlength="10"  id="contct_no" class="input-text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                            
                    </div>

                    <div class="form-row">
                        <label for="Patient_Age">Date</label>
                        <input type="text" name="date"  id="" class="input-text" value="<?php echo date('Y-m-d'); ?>" readonly >
                    </div>

                    <div class="form-row">
                        <label for="Patient_Address">Time</label>
                        <input type="time" name="time" id="time" class="input-text" value="<?php echo $time; ?>" readonly>
                    </div>

                    <div class="form-row">
                        <label for="doctor_name">Doctor Name</label>
                        <input type="text" name="doctor_name" id="doctor_name" class="input-text"  value="<?php echo $name; ?>" readonly>
                    </div>

                    

                    <div class="form-row">
                        <label for="Patient_Contact_Number">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email EX: ABC@BBC.com " class="input-text" required >
                    </div>

                    <div class="form-row-last">
                        <input type="submit" name="submit" class="AddPatient" value="Book Now"> 
                        <a href="../index.php"> <input type="button" name="button" class="AddPatient" value="Back"></a>

                    </div>

                </form>
        </div></div>
        
        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST["name"];
                $nic = $_POST["nic"];
                $contct_no = $_POST["contct_no"];
                $date = $_POST["date"];
                $time = $_POST["time"];
                $doctor_name = $_POST["doctor_name"];
                $email = $_POST["email"];

                if (!empty($name) && !empty($nic) && !empty($contct_no) && !empty($date) && !empty($time) && !empty($doctor_name) && !empty($email)) {
                    $sql = "INSERT INTO `appointment`(`name`,`nic`,`contct_no`,`date`,`time`,`doctor_name`,`email`) 
                            VALUES ('".$name."','".$nic."','".$contct_no."','".$date."','".$time."','".$doctor_name."','".$email."')";
                    mysqli_query($conn, $sql);
                    $alert = "Appointment Adedd Successfully";
                
                header("Location: doctor.php?insertion=pass&alert=" . urlencode($alert));
                    exit();
                }
            }
        ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

   
</html>

