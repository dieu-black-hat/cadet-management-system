<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // User is logged in, handle the logout process
    if (isset($_POST['logout'])) {
        // Destroy the session and redirect to the login page
        session_destroy();
        header("Location: index.html");
        exit();
    }
} else {
    // User is not logged in, redirect to the login page
    header("Location: page-login.php");
    exit();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tastebut";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
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
$dateofbirth = $_POST['dateofbirth'];
$bloodgrp = $_POST['bloodgrp'];

// Retrieve the uploaded image file
$profileImage = $_FILES['profile_image']['name'];

// Move the uploaded file to a specific directory
$targetDirectory = "images/profile/"; // Specify the directory where you want to store the images
$targetFile = $targetDirectory . basename($_FILES['profile_image']['name']);

if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetFile)) {
    // Prepare the query with image insertion
    $sql = "INSERT INTO cadet (fname, lname, email, joindate, rollno, company, platoon, gender, number, parentsname, parentsno, dateofbirth, bloodgrp, profile_image) VALUES ('$fname', '$lname', '$email', '$joindate', '$rollno', '$company', '$platoon', '$gender', '$number', '$parentsname', '$parentsno', '$dateofbirth', '$bloodgrp', '$profileImage')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading the profile image.";
}

// Close the connection
$conn->close();
?>