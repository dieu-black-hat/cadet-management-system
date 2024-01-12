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
<?php
    // Include the connection file
    include ('conncadet.php');

    // Rest of your PHP code goes here
    // You can now use the $conn variable for database operations
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Add Cadet </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">

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
                        <?php
include ('conncadet.php');

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
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
    $address = $_POST['address'];

    $conn = new mysqli($servername, $username, $pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cadet (fname, lname, email, joindate, rollno, company, platoon, gender, number, parentsname, parentsno, dateofbirth, bloodgrp, address) VALUES ('$fname', '$lname', '$email', ' $joindate', '$rollno', '$company', '$platoon', '$gender', '$number', '$parentsname', '$parentsno', '$dateofbirth', '$bloodgrp', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";

        // Update notification count
        $query = "SELECT COUNT(*) AS newNotificationCount FROM cadet";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $newNotificationCount = $row['newNotificationCount'];
        
        echo '<script>';
        echo 'window.onload = function() {';
        echo '    document.querySelector(".dropdown-item").style.display = "block";';
        echo '    document.querySelector(".notify-time").textContent = "' . date("h:i a") . '";';
        echo '    document.querySelector(".notification-count").textContent = "' . $newNotificationCount . '";';
        echo '}';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<ul class="navbar-nav header-right">
    <li class="nav-item dropdown notification_dropdown">
        <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
            <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg>
            <div class="pulse-css"></div>
            <span class="notification-count">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <ul class="list-unstyled">
                <?php
                $conn = new mysqli($servername, $username, $pass, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT * FROM cadet ORDER BY cadetid DESC LIMIT 2";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $cadetName = $row['fname'];
                        $cadetRole = "lname";
                        $notificationTime = date("h:i a");

                        echo '<li class="media dropdown-item">';
                        echo '    <span class="success"><i class="ti-user"></i></span>';
                        echo '    <div class="media-body">';
                        echo '        <a href="#">';
                        echo '            <p><strong>' . $cadetName . '</strong> has been added as a <strong>' . $cadetRole . '</strong> successfully.</p>';
                        echo '        </a>';
                        echo '    </div>';
                        echo '    <span class="notify-time">' . $notificationTime. '</span>';
                        echo '</li>';
                    }
                }

                $conn->close();
                ?>
            </ul>
            <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
        </div>
    </li>
</ul>
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
                            </li>
                        </ul>
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
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index-0.php">Dashboard </a></li>
                           
                        </ul>
                    </li>
                   
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Cadets</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-students.php">All Cadets</a></li>
                            <li><a href="add-student.php">Add Cadets</a></li>
                            <li><a href="edit-student.php">Edit Cadets</a></li>
                           
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
            <!-- row -->
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Cadets</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Cadets</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Cadets</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Basic Info</h5>
                            </div>
                            <div class="card-body">
                            <form action="cadetform.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label" >First Name</label>
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" name="lname" id="lname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Registration Date</label>
                                                <input name="joindate" class="datepicker-default form-control" id="joindate" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Intake.</label>
                                                <input type="text" name="rollno" id="rollno" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Company</label>
                                                <select class="form-control" name="company" id="company" required>
												
													<option>A- Company</option>
									
													<option>B- Company</option>
													<option>C- Company</option>
													<option >D- Company</option>
													
												</select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Platoon</label>
                                                <select class="form-control" name="platoon" id="platoon" required>
											
													<option>P-1</option>
									
													<option>P-2</option>
													<option>P-3</option>
													
													
												</select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender" id="gender" required>
													<option value="Gender">Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Intake</label>
                                                <input type="text" name="number" id="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Parents Name</label>
                                                <input type="text" name="parentsname" id="parentsname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Parents Mobile Number</label>
                                                <input type="text" name="parentsno" id="parentsno" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Date of Birth</label>
                                                <input name="dateofbirth" class="datepicker-default form-control" id="dateofbirth" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Blood Group</label>
                                                <input type="text" name="bloodgrp" id="bloodgrp" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group fallback w-100">
                                                <input type="file" name="profile_image" id="profile_image" class="dropify" data-default-file="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit1" class="btn btn-light">Cencel</button>
                                        </div>
                                    </div>
                                </form>
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
                <p>Copyright © Designed IT; Developed by DieudTheblackhat</a> 2023</p>
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

    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>

    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

</body>

</html>