<?php

@include'../../../config.php';


$sql = "DELETE FROM testing WHERE nic='" . $_GET["nic"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../testing.php?insetion=pass");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>