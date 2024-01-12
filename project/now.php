
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
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $joindate = $_POST['joindate'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $rank = $_POST['rank'];
    $department = $_POST['department'];
    $dateofbirth = $_POST['dateofbirth'];
    $number = $_POST["number"];

    // Perform any necessary validation on the form inputs

    // Construct the update query
    $sql = "UPDATE users SET fname='$fname', lname='$lname', email='$email', joindate='$joindate', password='$password', number='$number', gender='$gender', rank='$rank', department='$department', dateofbirth='$dateofbirth' WHERE number='$number'";

  

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
 