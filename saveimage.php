<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$targetDirectory = "uploads/"; // Directory where the images will be stored
$targetFile = $targetDirectory . basename($_FILES['profile_picture']['name']); // Full path of the target file

$uploadSuccess = move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile); // Move the uploaded file to the target directory

if ($uploadSuccess) {
    $studentid = $_POST['studentid'];
    $filename = basename($_FILES['profile_picture']['name']);

    $sql = "UPDATE student SET profile_picture='$filename' WHERE studentid='$studentid'";
    mysqli_query($conn, $sql);

    header("location: students.php");
    exit();
} else {
    // Handle the case when the file upload fails
    echo "File upload failed!";
}
?>
