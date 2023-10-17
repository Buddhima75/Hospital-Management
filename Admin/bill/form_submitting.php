<?php
    // Retrieve the form data
    $patientId = $_POST['patientId'];
    $date = $_POST['date'];
    $medicineName = $_POST['medicineName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $patientName = $_POST['patientName'];
    $admissionDate=$_POST['admissionDate'];

    // Create a database connection
    @include'../../config.php';


    $sql = "INSERT INTO medicine (patient_id, patient_name, admission_date, date, medicine_name, price, quantity) VALUES ('$patientId','$patientName','$admissionDate', '$date', '$medicineName', '$price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        // Update the stock quantity 
        $updateSql = "UPDATE stock SET quantity = quantity - $quantity WHERE name = '$medicineName'";
        if ($conn->query($updateSql) === TRUE) {
             
            $alert = "Medicine Added Successfully";
            header("Location: form.php?insertion=pass&alert=" . urlencode($alert)); // Redirect to a success page
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding data: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>
