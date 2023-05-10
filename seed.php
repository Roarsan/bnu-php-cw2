<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");

//CHECKS WHETHER WE ARE LOGGED IN
if (isset($_SESSION['id'])) {

  //insert query

  $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) VALUES
          ('12345678', '" . password_hash('password123', PASSWORD_DEFAULT) . "', '2005-01-01', 'John', 'Doe', '123 Main St', 
          'London', 'Greater London', 'United Kingdom', 'W1A 1AA'),
          ('87654321', '" . password_hash('qwerty', PASSWORD_DEFAULT) . "', '2004-02-01', 'Jane', 'Doe', '456 Park Ave', 
          'New York', 'New York', 'United States', '10022'),
          ('11111111', '" . password_hash('letmein', PASSWORD_DEFAULT) . "', '2003-03-01', 'Bob', 'Smith', '789 Elm St', 
          'Sydney', 'New South Wales', 'Australia', '2000'),
          ('22222222', '" . password_hash('password', PASSWORD_DEFAULT) . "', '2002-04-01', 'Alice', 'Jones', '321 Oak Rd', 
          'Toronto', 'Ontario', 'Canada', 'M4W 2G8'),
          ('33333333', '" . password_hash('test123456', PASSWORD_DEFAULT) . "', '2001-05-01', 'David', 'Lee', '567 Maple St', 
          'Singapore', 'Singapore', 'Singapore', '058357')";

  $result = mysqli_query($conn,$sql);

}


?>
