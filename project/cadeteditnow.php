
<?php
// Assuming you have established the database connection
$servername = "localhost"; // Replace with your server name or IP address
$username = "root"; // Replace with your database username
$password = ""; // Rplace with your database password
$database = "tastebut"; // Replace with your database name

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $joindate = $_POST['joindate'];
    $rollno = $_POST['rollno'];
    $company = $_POST['company'];
    $platoon = $_POST['platoon'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    
    $parentsname = $_POST['parentsname'];
    $parentsno = $_POST['parentsno'];
    $dateofbirth= $_POST['dateofbirth'];
    $bloodgrp= $_POST['bloodgrp'];

    // Perform any necessary validation on the form inputs

    // Construct the update query
    $sql = "UPDATE cadet SET fname='$fname', lname='$lname', email='$email', joindate='$joindate', number='$number', dateofbirth='$dateofbirth' WHERE rollno='$rollno'";

  

    // Execute the update query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
 