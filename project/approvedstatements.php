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
        <a href="page-login.html" class="dropdown-item ai-icon">
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
				
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
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
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
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
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">User Assignment</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="Assign Batallian.php">Assign Batallian</a></li>
                            <li><a href="Assign Company.php">Assign Company</a></li>
                            <li><a href="Assign Platoon.php">Assign Platoon</a></li>
                            <li><a href="Assign Section.php"> Assign Section</a></li>
                            
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
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
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Pending... statement list</h4>
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
                <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tastebut";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['email']) || ($_SESSION['role_name'] !== 'Platoon Commander' && $_SESSION['role_name'] !== 'admin' && $_SESSION['role_name'] !== 'Company Commander' && $_SESSION['role_name'] !== 'Health' && $_SESSION['role_name'] !== 'Instructor')) {
    header("Location: login-page.php");
    exit();
}

$userid = $_SESSION['userid'];
$role_name = $_SESSION['role_name'];

if ($role_name === 'Platoon Commander') {
    $sql = "SELECT s.cadetid, s.statementdescription, s.statementfile
            FROM statements s
            JOIN user_cadet_assignment uca ON uca.cadetid = s.cadetid
            JOIN cadet c ON c.cadetid = uca.cadetid
            WHERE uca.userid = '$userid';";
} elseif ($role_name === 'admin') {
    $sql = "SELECT cadetid, statementdescription, statementfile FROM statements";
} elseif ($role_name === 'Company Commander') {
    $sql = "SELECT s.cadetid, s.statementdescription, s.statementfile
            FROM statements s
            JOIN user_cadet_assignment uca ON uca.cadetid = s.cadetid
            JOIN cadet c ON c.cadetid = uca.cadetid
            WHERE uca.userid = '$userid';";
} else {
    header("Location: page-error-400.html");
    exit();
}

$result = $conn->query($sql);
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
                    $cadetid = $row['cadetid'];
                    $statementDescription = $row['statementdescription'];
                    $statementFile = $row['statementfile'];
                    ?>

                    <p>Statement cadetid: <?php echo $cadetid; ?></p>
                    <p>Statement Description: <?php echo $statementDescription; ?></p>
                    <p>Statement File: <a href="<?php echo $statementFile; ?>" target="_SELF">View File</a></p>

                    <form action="onwaitstatements.php" method="post" onsubmit="submitForm(event, this)">
                        <input type="hidden" name="cadetid" value="<?php echo $cadetid; ?>">
                        <input type="hidden" name="statementDescription" value="<?php echo $statementDescription; ?>">
                        <input type="hidden" name="statementFile" value="<?php echo $statementFile; ?>">
                        <button type="submit" name="approve" class="btn btn-warning btn-block mb-2">Approve <span class="btn-icon-right"><i class="fa fa-star"></i></span></button>
                    </form>
                    <form action="rejectedstatements.php" method="post" onsubmit="submitForm(event, this)">
                        <input type="hidden" name="cadetid" value="<?php echo $cadetid; ?>">
                        <input type="hidden" name="statementDescription" value="<?php echo $statementDescription; ?>">
                        <input type="hidden" name="statementFile" value="<?php echo $statementFile; ?>">
                        <button type="submit" name="reject" class="btn btn-danger btn-block">Reject <span class="btn-icon-right"><i class="fa fa-close"></i></span></button>
                    </form>
                    <button type="button" class="btn btn-secondary btn-block mt-2" onclick="openCommentDialog()">Comment on Statement <span class="btn-icon-right"><i class="fa fa-envelope"></i></span></button>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No statements found.</p>
<?php endif; ?>

<!-- Add the following script to open the file in an iframe -->
<script>
    function openFileInIframe(fileUrl) {
        // Create an iframe element
        var iframe = document.createElement('iframe');
        // Set the source attribute to the file URL
        iframe.src = fileUrl;
        // Set the width and height attributes to fit your design
        iframe.width = '100%';
        iframe.height = '500px';
        // Append the iframe to the body or a specific container
        document.body.appendChild(iframe);
    }

    // Attach click event to all "View File" links
    var viewFileLinks = document.querySelectorAll('[data-view-file]');
    viewFileLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            // Get the file URL from the data-view-file attribute
            var fileUrl = link.getAttribute('data-view-file');
            // Open the file in the iframe
            openFileInIframe(fileUrl);
        });
    });

    function openCommentDialog() {
        // Add your code to open the comment dialog here
    }
</script>

<?php
$conn->close();
?>

             
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