﻿<?php
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
    <title> Admin Dashboard </title>
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
        <div class="header"  style="background-color: skyblue;">
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
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
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
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4> Approved statements</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">On wait</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Statements</a></li>
                        </ol>
                    </div>
                </div>
           

                <div class="row">

    <div class="container">
        <h2>Approved Statements</h2>
        <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the submitted data
        $cadetid = $_POST['cadetid'];
        $statementDescription = $_POST['statementDescription'];
        $statementFile = $_POST['statementFile'];

        // Store the approved statement details in the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tastebut";

        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement to insert the approved statement details
        $sql = "INSERT INTO approved_statements (cadetid, statementdescription, statementfile) VALUES ('$cadetid', '$statementDescription', '$statementFile')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Delete the approved statement from the 'statements' table
            $deleteSql = "DELETE FROM statements WHERE cadetid = '$cadetid' AND statementdescription = '$statementDescription' AND statementfile = '$statementFile'";
            if ($conn->query($deleteSql) === TRUE) {
                echo "Approved statement deleted from the 'statements' table.";
            } else {
                echo "Error deleting the approved statement from the 'statements' table: " . $conn->error;
            }
        } else {
            echo "Error storing the approved statement: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        // No form submission
        
    }
?>
<div class="row">
<?php
// Replace your_servername, your_username, your_password, your_database with your actual database credentials
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

if (!isset($_SESSION['email']) || ($_SESSION['role_name'] !== 'Platoon Commander' && $_SESSION['role_name'] !== 'admin' && $_SESSION['role_name'] !== 'Company Commander' && $_SESSION['role_name'] !== 'Health' && $_SESSION['role_name'] !== 'Instructor')) {
    // User is not logged in or not in a valid role, redirect them to the login page
    header("Location: login-page.php");
    exit();
}

$userid = $_SESSION['userid']; // Assuming you store the userid in the session upon login
$role_name = $_SESSION['role_name'];

// SQL SELECT query to retrieve data from the database, filtered by user ID if the role is Platoon Commander
if ($role_name === 'Platoon Commander') {
    $sql = "SELECT s.cadetid, s.statementdescription, s.statementfile
    FROM approved_statements s
    JOIN user_cadet_assignment uca ON uca.cadetid = s.cadetid
    JOIN cadet c ON c.cadetid = uca.cadetid
    WHERE uca.userid = '$userid';";
}
// SQL SELECT query to retrieve all cadets from the database if the role is Admin
elseif ($role_name === 'admin') {
    $sql = "SELECT cadetid, statementdescription, statementfile FROM approved_statements";
}
// SQL SELECT query to retrieve cadets for specific platoons and a particular company if the role is Company Commander
elseif ($role_name === 'Company Commander') {
    $sql = "SELECT s.cadetid, s.statementdescription, s.statementfile
    FROM approved_statements s
    JOIN user_cadet_assignment uca ON uca.cadetid = s.cadetid
    JOIN cadet c ON c.cadetid = uca.cadetid
    WHERE uca.userid = '$userid';";
}
// SQL SELECT query to retrieve all cadets from the database if the role is Health

else {
    // Redirect other roles to a different page or display an error message
    header("Location: page-error-400.html");
    exit();
}

// Execute the query
$result = $conn->query($sql);

// Rest of your code to display the statements
?>

<?php if ($result->num_rows > 0) : ?>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 315px; height: 350px;">
                <div class="card-header">
                    <h4 class="card-title">Pending Statements</h4>
                </div>
                <div class="card-body">
                    <?php
                    // Access the values
                    $cadetid = $row['cadetid'];
                    $statementDescription = $row['statementdescription'];
                    $statementFile = $row['statementfile'];
                    ?>

                    <p>Statement Number: <?php echo $cadetid; ?></p>
                    <p>Statement Description: <?php echo $statementDescription; ?></p>
                    <p>Statement File: <a href="<?php echo $statementFile; ?>" target="_blank">View File</a></p>

                    <form action="" method="post">
                        <input type="hidden" name="cadetid" value="<?php echo $cadetid; ?>">
                        <input type="hidden" name="statementDescription" value="<?php echo $statementDescription; ?>">
                        <input type="hidden" name="statementFile" value="<?php echo $statementFile; ?>">
                        <button type="submit" name="approve" class="btn btn-warning btn-block mb-2">Approved <span class="btn-icon-right"><i class="fa fa-star"></i></span></button>
                    </form>
                   
                   
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No statements found.</p>
<?php endif; ?>

<?php
// Close the connection
$conn->close();
?>
            

</body>
</html></div></div>
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
                <p>Copyright © Designed &IT; Developed by <br>Full-stuck Developer</a> 2023</p>
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