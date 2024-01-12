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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
        <a href="index.html" class="brand-logo">
    <img class="logo-abbr" src="images/again.png" alt="" >
</a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Dieudonne</strong> has added a <strong>Cadet</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> edited Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> added <strong>cadet</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> deleted Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>cadet</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
        Settings
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="app-profile.html" class="dropdown-item ai-icon">
            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <span class="ml-2">Profile </span>
        </a>
        <a href="email-inbox.html" class="dropdown-item ai-icon">
            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span class="ml-2">Inbox </span>
        </a>
        <a href="index.html" class="dropdown-item ai-icon">
            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            <span class="ml-2">Logout </span>
        </a>
    </div>
</li>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="index-0.php">Dashboard </a></li>
                        
                        </ul>
                    </li>
					
                                </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your Account dashboard </p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                     
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                            
                                <div class="photo-content">
                                <h1>Hello! Change your profile</h1>
                                    <div class="cover-photo"></div>
                                    
                                </div>
                                <div class="profile-info">
									
                                    <div class="row">
										<div class="col-sm-3">
											
										</div>
                                        <div class="col-sm-9 col-12">
                                            <div class="row">
                                              
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                     
                               
                              
                                </div>
                               
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                         
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                               
                                                </div>
                                            </div>
                                                
                                                 
                                            
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Profile Photo</h4>
                                                        <?php

$servername = "localhost";
$username = "root";
$pass = "";
$database = "tastebut";

$image_path = ""; // Initialize the variable to avoid errors

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $department = $_POST['department'];

    // Database connection
    $conn = new mysqli($servername, $username, $pass, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the user ID from the session
    $userid = $_SESSION['userid'];

    // Retrieve the current profile information from the database
    $sql = "SELECT email, department, password, profile_image FROM users WHERE userid = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $stmt->bind_result($currentEmail, $currentDepartment, $currentPassword, $profileImage);
    $stmt->fetch();
    $stmt->close();

    // Update the values with the new ones if provided, otherwise keep the current values
    $email = empty($email) ? $currentEmail : $email;
    $department = empty($department) ? $currentDepartment : $department;

    // Update password if a new one is provided
    if (!empty($password)) {
        // Hash the new password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare the SQL statement
        $sql = "UPDATE users SET email = ?, department = ?, password = ? WHERE userid = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind the parameters and execute the statement
        $stmt->bind_param("sssi", $email, $department, $hashedPassword, $userid);
        if ($stmt->execute()) {
            // Update successful
        } else {
            echo "Error updating profile: " . $stmt->error;
        }
    } else {
        // No new password provided, update other fields only
        // Prepare the SQL statement
        $sql = "UPDATE users SET email = ?, department = ? WHERE userid = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind the parameters and execute the statement
        $stmt->bind_param("ssi", $email, $department, $userid);
        if ($stmt->execute()) {
            // Update successful
        } else {
            echo "Error updating profile: " . $stmt->error;
        }
    }

    // Handle profile image upload
    if (!empty($_FILES['profile_image']['name'])) {
        $image_name = $_FILES['profile_image']['name'];
        $image_tmp = $_FILES['profile_image']['tmp_name'];
        $image_path = 'desktop' . $image_name;

        // Check for file upload errors
        if ($_FILES['profile_image']['error'] !== UPLOAD_ERR_OK) {
            echo "Error uploading profile image: " . $_FILES['profile_image']['error'];
            // Handle the error appropriately (e.g., display a message to the user)
        } else {
            // Move the uploaded image to the desired directory
            if (move_uploaded_file($image_tmp, $image_path)) {
                // Update the profile image path in the session variable
                $_SESSION['profile_image'] = $image_path;
                
                // Prepare the SQL statement
                $sql = "UPDATE users SET profile_image = ? WHERE userid = ?";
                $stmt = $conn->prepare($sql);
                if ($stmt === false) {
                    die("Error preparing statement: " . $conn->error);
                }

                // Bind the parameters and execute the statement
                $stmt->bind_param("si", $image_path, $userid);
                if ($stmt->execute()) {
                    // Image update successful
                } else {
                    echo "Error updating profile image: " . $stmt->error;
                }
            } else {
                echo "Error moving uploaded file.";
            }
        }
    }

    $conn->close();
}

// Retrieve the current profile image path from the database outside the if (isset($_POST["submit"])) block
$conn = new mysqli($servername, $username, $pass, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user ID from the session
$userid = $_SESSION['userid'];

// Prepare the SQL statement to retrieve the profile image
$sql = "SELECT profile_image FROM users WHERE userid = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("i", $userid);
$stmt->execute();
$stmt->bind_result($profile_image);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<div class="profile-info">
    <div class="row">
        <div class="col-sm-3">
            <div class="profile-photo">
                <?php
                // Display the current profile image or the default image if it doesn't exist
                if (!empty($profile_image)) {
                    echo '<img src="' . $profile_image . '" class="img-fluid rounded-circle" alt="">';
                } else {
                    echo '<img src="images/profile/profil.png" class="img-fluid rounded-circle" alt="">';
                }
                ?>
            </div>
           
        </div>
    </div>
</div>

<form method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="">
        </div>
        <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label>Department</label>
        <input type="text" name="department" id="department" class="form-control" value="">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group fallback w-100">
            <input type="file" name="profile_image" id="profile_image" class="dropify" data-default-file="">
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="gridCheck">
            <label class="custom-control-label" for="gridCheck">Check me out</label>
        </div>
    </div>
    <button class="btn btn-primary" type="submit" name="submit" value="UpdateProfile">Change</button>
</form>
</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &IT; Developed by Full stack the Blackhat 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
		
</body>

</html>