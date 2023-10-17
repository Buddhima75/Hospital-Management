<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="../../Images\logo3.png"  type="image/png">

	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Patient/fonts/line-awesome/css/line-awesome-font-awesome.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="AddPatient.css"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
   
</head>
<body style="background-color:aliceblue;">
	<div class="page-content">
		<div class="form-v4-content">
			
			<form class="form-detail" action="../Patient/PHP/insertPatient.php" method="POST" id="myform">
				<h2>PATIENT REGISTER FORM</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="Patient_ID">Patient ID</label>
						<input type="text" name="patient_id" id="patient_id" class="input-text">
					</div>
					<div class="form-row form-row-1">
						<label for="NIC">NIC</label>
						<input type="text" pattern="[0-9]{10}" name="patient_nic" id="patient_nic" class="input-text" required>
					</div>
				</div>
				<div class="form-row">
					<label for="Patient_Name">Patient Name</label>
					<input type="text" name="patient_name" id="patient_name" class="input-text" required>
				</div>

                <div class="form-row">
					<label for="Patient_Age">Patient Age</label>
					<input type="number" name="patient_age" id="patient_age" class="input-text" required >
				</div>

                <div class="form-row">
					<label for="Patient_Address">Patient Address</label>
					<input type="text" name="patient_address" id="patient_address" class="input-text" required >
				</div>

                <div class="form-row">
					<label for="Patient_Contact_Number">Patient Contact Number</label>
					<input type="number" placeholder="Your Phone Number EX:1234567890 "  pattern="[1-9]{1}[0-9]{9}"   maxlength="10" name="patient_cno" id="patient_cno" class="input-text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
		
					
				</div>

                <div class="form-row">
					<label for="Date_of_Admission">Date of Admission </label>
					<input type="text" name="patient_dof" id="" class="input-text" value="<?php echo date('Y-m-d'); ?>" required>
				</div>

                <div class="form-row">
					<label for="State_of_patient">State of patient </label>
					<select class="input-text" id="State_of_patient" name="State_of_patient">
                        <option value="critical">Critical</option>
                        <option value="normal">Normal</option>
                        <option value="death">Death</option>
                        <option value="discharged">Discharged</option>
                        </select>
				</div>

				<div class="form-row-last">
					<input type="submit" name="submit" class="AddPatient" value="ADD PATIENT">
					<a href="../Patient/patient.php"> <input type="button" name="button" class="AddPatient" value="Back"></a>

				</div>
			</form>
		</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  

</html>