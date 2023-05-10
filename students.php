<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");

//CHECKS WHETHER WE ARE LOGGED IN
if (isset($_SESSION['id'])) {
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    // start HTML form
    echo "<form method='post' action='studentdelete.php'>";

  // start HTML table with some basic styling
  echo "<table style='border-collapse: collapse; width: 100%;'>";
  echo "<thead style='background-color:  #007bff; color: #fff;'>";
  echo "<tr><th style='padding: 8px;'>Select</th><th style='padding: 8px;'>Student ID</th><th style='padding: 8px;'>Password</th>
  <th style='padding: 8px;'>Date of Birth</th><th style='padding: 8px;'>First Name</th><th style='padding: 8px;'>Last Name</th><th style='padding: 8px;'>Profile Picture</th><th style='padding: 8px;'>House</th><th style='padding: 8px;'>Town</th><th style='padding: 8px;'>County</th><th style='padding: 8px;'>Country</th><th style='padding: 8px;'>Postcode</th></tr></thead>";
  echo "<tbody>";
  
    // loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // create a new row in the table for each record, with a checkbox for selection
        echo "<tr>";
        echo "<td style='padding: 8px; text-align: center;'><input type='checkbox' name='delete[]' value='" . $row['studentid'] . "'></td>";
        echo "<td style='padding: 8px;'>" . $row['studentid'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['password'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['dob'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['firstname'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['lastname'] . "</td>";
        
        if ($row['profile_picture']) {
            // Display image if profile picture exists
            echo "<td style='padding: 8px;'><img src='getjpg.php?" . $row['profile_picture'] . "' width='100' height='100'></td>";
        } else {
            // Display a placeholder image if profile picture is not available
            echo "<td style='padding: 8px;'><img src='placeholder_image.jpg' width='100' height='100'></td>";
        }
        
        echo "<td style='padding: 8px;'>" . $row['house'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['town'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['county'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['country'] . "</td>";
        echo "<td style='padding: 8px;'>" . $row['postcode'] . "</td>";
        echo "</tr>";
    }

    // end HTML table
    echo "</tbody></table>";

    // Delete button
    echo "<button type='submit' name='submit' onclick='return confirm(\"Are you sure you want to delete the selected students?\")'>Delete</button>";

    // end HTML form
    echo "</form>";
} else {
    echo "You must be logged in to view this page";
}

echo template("templates/partials/footer.php");

?>

