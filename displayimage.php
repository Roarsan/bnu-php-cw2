<html>
<head></head>
<body>
<html>
<head></head>
<body>

<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

$sql = "SELECT studentid, firstname, lastname FROM student;";
$result = mysqli_query($conn, $sql);

echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>Student ID</th>
<th width='200' align='left'>Name</th>
<th width='200' align='left'>Last Name</th>
<th>Profile Picture</th></tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['studentid'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    
    // Check if profile picture exists
    if (file_exists("getjpg.php?studentid=" . $row['studentid'])) {
        echo "<td><img src='getjpg.php?studentid=" . $row['studentid'] . "' height='100' width='100' /></td>";
    } else {
        echo "<td><img src='placeholder_image.jpg' height='100' width='100' /></td>";
    }
    
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
