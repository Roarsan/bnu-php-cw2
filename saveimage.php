<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$image = $_FILES['profile_picture']['tmp_name'];
$studentid = $_POST['studentid'];

$imagedata = file_get_contents($image);
$imagedata = mysqli_real_escape_string($conn, $imagedata);

$sql = "UPDATE student SET profile_picture='$imagedata' WHERE studentid='$studentid'";
mysqli_query($conn, $sql);

mysqli_close($conn);

header("location: students.php");
exit();
?>
