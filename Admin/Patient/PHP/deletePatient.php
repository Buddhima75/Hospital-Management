<?php
              @include'../../../config.php';


$sql = "DELETE FROM patients WHERE patient_id='" . $_GET["patient_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location:../patient.php?insetion=pass");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>