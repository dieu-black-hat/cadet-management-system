<?php

$servername = "localhost";
$username = "root";
$pass = "";
$database = "tastebut";


$conn = new mysqli($servername, $username, $pass, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "Connected to the database successfully.";



$conn->close();
?>