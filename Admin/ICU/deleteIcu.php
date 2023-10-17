<?php
              @include'../../config.php';


$sql = "DELETE FROM icu WHERE icu_bed_number='" . $_GET["icu_bed_number"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: icu.php?insetion=pass");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>