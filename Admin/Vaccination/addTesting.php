<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BBC Admin</title>
	<link rel="icon" href="../../Images\logo3.png"  type="image/png">

	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="covidTesing.css"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

	
   
</head>
<body style="background-color:aliceblue;">
	<div class="page-content">
		<div class="form-v4-content">
			
			<form class="form-detail" action="../../Admin/Vaccination/PHP/inserTesting.php" method="POST" id="myform">
				<h2>Add Vaccination</h2>
				
					<div class="form-row">
						<label for="id_number">NIC</label>
						<input type="text" name="nic" id="nic" pattern="[0-9]{10}" class="input-text">
					</div>
					<div class="form-row">
						<label for="full_name">Name</label>
						<input type="text" name="name" id="name" class="input-text">
					</div>

                   
                    <div class="form-row">
						<label for="full_name">Address</label>
						<input type="text" name="address" id="address" class="input-text">
					</div>			
				

                <div class="form-row">
					<label for="age">Contact</label>
					<input type="number" name="contact" placeholder="Your Phone Number EX:1234567890 " pattern="[1-9]{1}[0-9]{9}"   maxlength="10" id="contact" class="input-text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  required>
				</div>

                <div class="form-row">
					<label for="age">Brand name</label>
					<input type="text" name="brand" id="brand" class="input-text" required>
				</div>

                <div class="form-row">
					<label for="age"> Date</label>
					<input type="text" name="first_dose_date" id="" class="input-text" value="<?php echo date('Y-m-d'); ?>"  required>
				</div>

               <div class="form-row">
					<label for="age">Price Per Dose</label>
					<input type="number" name="price" id="price" class="input-text" required>
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="submit" class="add_test" value="Add Record">
				</div>

            </div>
			</form>
		</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  

</html>