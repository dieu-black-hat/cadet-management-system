<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                               
<?php
session_start();

$servername = "localhost";
$username = "root";
$pass = "";
$database = "tastebut";

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username, $pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve hashed password, role_name, and userid from the database for the entered email
    $sql = "SELECT u.password, p.role_name, u.userid, u.status FROM users u
            JOIN permissions p ON u.userid = p.userid
            WHERE u.email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        $role_name = $row['role_name'];
        $userid = $row['userid'];
        $status = $row['status'];

        if ($status === 'block') {
            // Email is blocked, redirect to the account block page
            header("Location: page-lock-screen.html");
            exit();
        }

        // Verify the entered password with the stored hashed password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, create session variables for the authenticated user
            $_SESSION['email'] = $email;
            $_SESSION['role_name'] = $role_name;
            $_SESSION['userid'] = $userid;

            // Check the role_name to determine the appropriate redirect
            if ($role_name === 'Platoon Commander' || $role_name === 'admin' || $role_name === 'Company Commander') {
                // Redirect the Platoon Commander, Company Commander, or admin to the page displaying their assigned cadets
                header("Location: index-0.php");
                exit();
            } elseif ($role_name === 'Health') {
                // Redirect the Health role to a specific page for health-related tasks
                header("Location:index-0.php");
                exit();
            }
            elseif ($role_name === 'Instructor') {
                // Redirect the Instructor role to a specific page
                header("Location: index-0.php");
                exit();
            }
            else {
                // Redirect other roles to a different page or the default dashboard
                header("Location: index-0.php");
                exit();
            }
        } else {
            // Password is incorrect
            echo "Invalid email or password.";
        }
    } else {
        // User not found
        echo "Invalid email or password.";
    }

    $conn->close();
}
?>
<!-- HTML login form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="email"><strong>Email</strong></label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password"><strong>Password</strong></label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
        <div class="form-group">
            <div class="custom-control custom-checkbox ml-1">
                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
            </div>
        </div>
        <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Sign me in</button>
    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>