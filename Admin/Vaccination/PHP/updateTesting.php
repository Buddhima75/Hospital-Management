<?php 
              @include'../../../config.php';



 if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE testing set nic='" . $_POST['nic'] . "', 
                                            name='" . $_POST['name'] . "', 
                                            address='" . $_POST['address'] . "', 
                                            contact='" . $_POST['contact'] . "' ,
                                            brand='" . $_POST['brand'] . "',
                                            first_dose_date='" . $_POST['first_dose_date'] . "', 
                                            price='" . $_POST['price'] . "'

                                             WHERE nic='" . $_POST['nic'] . "'");
                        // $message = "Record Modified Successfully";
                        // header("Location: ../testing.php?insetion=pass");
						$alert = "Record Modified Successfully";

						header("Location: ../testing.php?insertion=pass&alert=" . urlencode($alert));

						
    }

    $result = mysqli_query($conn,"SELECT * FROM testing WHERE nic='" . $_GET['nic'] . "'");
    $row= mysqli_fetch_array($result);
    ?>


 <html>
    <head>
    <title>Update Employee Data</title>
	<link rel="icon" href="../../Images\logo3.png"  type="image/png">

    <meta charset="utf-8">
	<title>BBC</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../covidTesing.css"/>

	
    </head>
    <body>

    <div class="page-content">
		<div class="form-v4-content">
    <form  method="POST" action="" class="form-detail" id="myform">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <!--<a href="retrieve.php">Employee List</a>-->
    </div>
    <h2>TESTING EDIT FORM</h2>
  
    
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="Patient_ID">NIC</label>
						<input type="text" name="nic" id="nic" class="input-text"  value="<?php echo $row['nic'];?>" readonly >
					</div>
					<div class="form-row form-row-1">
						<label for="NIC">Name</label>
						<input type="text" name="name" id="name" class="input-text" value="<?php echo $row['name']; ?>">
					</div>
				</div>
				<div class="form-row">
					<label for="Patient_Name">Address</label>
					<input type="text" name="address" id="address" class="input-text" value="<?php echo $row['address'];?>">
				</div>

                <div class="form-row">
					<label for="Patient_Age">Contact</label>
					<input type="number" name="contact" id="contact" class="input-text" pattern="[1-9]{1}[0-9]{9}"   maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $row['contact'];?>" >
				</div>

                <div class="form-row">
					<label for="Patient_Address">Brand</label>
					<input type="text" name="brand" id="brand" class="input-text" value="<?php echo $row['brand'];?>" >
				</div>

                <div class="form-row">
					<label for="Patient_Contact_Number">First Dose Date</label>
					<input type="text" name="first_dose_date" id="datepicker" class="input-text" value="<?php echo $row['first_dose_date'];?>" >
				</div>

                <div class="form-row">
					<label for="Date_of_Admission">Price Per Dose </label>
					<input type="text" name="price" id="price" class="input-text" value="<?php echo $row['price'];?>">
				</div>

               

				<div class="form-row-last">
					<input type="submit" name="submit" class="add_test" value="EDIT PATIENT">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

