
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
    <title> Admin Dashboard Landing page </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/jqvmap/css/jqvmap.min.css">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <!-- Summernote -->
    <link href="vendor/summernote/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin-3.css">

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

            <h1>LOGO</h1>

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
                                <span class="notification-count">2</span>
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
                                                    <p><strong>Dieudonne</strong> has added a <strong>a Cadet</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>




                                    </ul>

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
        <div class="dlabnav" style="background: rgb(5, 49, 5);">
                <div class="dlabnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-home"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="index-0.php">Dashboard</a></li>
                              
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-user"></i>
                                <span class="nav-text">Admins</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="all-professors.php">All Admins</a></li>
                                <li><a href="add-professor.php">Add Admins</a></li>
                                <li><a href="edit-professor.php">Edit Admins</a></li>
                                <li><a href="professor-profile.php">Admins Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-users"></i>
                                <span class="nav-text">Cadets</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="all-students.php">All Cadets</a></li>
                                <li><a href="add-student.php">Add Cadets</a></li>
                                <li><a href="edit-student.php">Edit Cadets</a></li>
                                <li><a href="about-student.php">About Cadets</a></li>
                            </ul>

                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-graduation-cap"></i>
                                <span class="nav-text">User Assignment</span>
                            </a>
                            <ul aria-expanded="false">
                            
                                <li><a href="Assign Company.php">User Assignment</a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-building"></i>
                                <span class="nav-text">Give Permissions</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="all-departments.php">All Permissions</a></li>
                                <li><a href="add-departments.php">Give Permission </a></li>
                                <li><a href="revoke permisson.php">Revoke Permission</a></li>
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

                    <div class="row">
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tastebut";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve the total cadet count
function getTotalCadetCount($conn) {
    $query = "SELECT COUNT(cadetid) AS total_cadets FROM cadet";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['total_cadets'];
}

// Get the initial cadet count
$totalCadets = getTotalCadetCount($conn);

// Close the database connection
$conn->close();
?>
<div class="widget-stat card bg-primary">
    <div class="card-body">
        <div class="media">
            <span class="mr-3">
                <i class="la la-users"></i>
            </span>
            <div class="media-body text-white">
                <p class="mb-1">Total Cadets</p>
                <h3 class="text-white"><?php echo $totalCadets; ?></h3>
                
                <div class="progress mb-2 bg-white">
                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                </div>
                <small></small>
            </div>
        </div>
    </div>
</div>

                        </div>
                        <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tastebut";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve the total cadet count
function getTotalusersCount($conn) {
    $query = "SELECT COUNT(userid) AS total_users FROM users";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['total_users'];
}

// Get the initial cadet count
$totalusers = getTotalusersCount($conn);

// Close the database connection

$conn->close();
?>
<div class="widget-stat card bg-primary">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Total Instructors</p>
                    <h3 class="text-white"><?php echo $totalusers; ?></h3>
                    <div class="progress mb-2 bg-white">
                        <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                    </div>
                    <small></small>
                </div>
            </div>
        </div>
    </div>
    <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tastebut";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve the total cadet count
function getTotaldoctorsCount($conn) {
    $query = "SELECT COUNT(userid) AS total_doctors FROM users WHERE department = ' Health'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['total_doctors'];
}

// Get the initial cadet count
$totaldoctors = getTotaldoctorsCount($conn);

// Close the database connection
$conn->close();
?>
 <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="widget-stat card bg-success">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="mr-3">
										<i class="la la-users"></i>
									</span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Doctors</p>
                                            <h3 class="text-white"><?php echo $totaldoctors; ?></h3>
                                            <div class="progress mb-2 bg-white">
                                                <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                            </div>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="widget-stat card bg-success">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Banned Users</p>
                    <h3 class="text-white">00</h3>
                    <div class="progress mb-2 bg-white">
                        <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                    </div>
                    <small></small>
                </div>
            </div>
        </div>
    </div>
</div>                        <div class="col-xl-6 col-xxl-6 col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Rwanda Military Academy</h3>
                                </div>
                                <div class="card-body">
                                    <div id="morris_bar_stalked" class="morris_chart_height" style="height: 300px !important;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Sample chart</h3>
                                </div>
                                <div class="card-body">
                                    <div id="morris_donught_2" class="morris_chart_height" style="height: 300px !important;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Sample charts</h3>
                                </div>
                                <div class="card-body">
                                    <div id="morris_area" class="morris_chart_height" style="height: 300px !important;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">





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

                        <!-- Chart sparkline plugin files -->
                        <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
                        <script src="js/plugins-init/sparkline-init.js"></script>

                        <!-- Chart Morris plugin files -->
                        <script src="vendor/raphael/raphael.min.js"></script>
                        <script src="vendor/morris/morris.min.js"></script>

                        <!-- Init file -->
                        <script src="js/plugins-init/widgets-script-init.js"></script>

                        <!-- Demo scripts -->
                        <script src="js/dashboard/dashboard.js"></script>

                        <!-- Summernote -->
                        <script src="vendor/summernote/js/summernote.min.js"></script>
                        <!-- Summernote init -->
                        <script src="js/plugins-init/summernote-init.js"></script>

                        <!-- Svganimation scripts -->
                        <script src="vendor/svganimation/vivus.min.js"></script>
                        <script src="vendor/svganimation/svg.animation.js"></script>
                        <script src="js/styleSwitcher.js"></script>

</body>

</html>