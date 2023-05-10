<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$studentid = $_GET['studentid'];

$sql = "SELECT profile_picture FROM student WHERE studentid='" . $studentid . "';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$imagedata = $row['profile_picture'];

header("Content-type: image/jpeg");
echo $imagedata;

mysqli_close($conn);
?>
