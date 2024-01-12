<?php

include('conn.php');

if (isset($_POST["submit"])) {
   
    $fname = $_POST["fname"];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $joindate = $_POST['joindate'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $rank = $_POST['rank'];
    $department = $_POST['department'];
    $dateofbirth = $_POST['dateofbirth'];

    $conn = new mysqli($servername, $username, $pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fname, lname, email, joindate, password, number, gender, rank, department, dateofbirth) 
            VALUES ('$fname', '$lname', '$email', '$joindate', '$hashedPassword', '$number', '$gender', '$rank', '$department', '$dateofbirth')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>