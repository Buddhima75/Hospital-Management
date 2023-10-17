<?php

@include'../../../config.php';


$sql = "DELETE FROM staff WHERE id_number='" . $_GET["id_number"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location:../staff.php?insetion=pass");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>