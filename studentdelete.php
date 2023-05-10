<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");

global $conn;

$delete_array = $_POST['delete'];

if (!empty($delete_array)) {
    foreach ($delete_array as $studentid) {
        $deleteSQL = "DELETE FROM student WHERE studentid='" . mysqli_real_escape_string($conn, $studentid) . "'";
        mysqli_query($conn, $deleteSQL);
    }
}

header("Location: students.php");
?>
