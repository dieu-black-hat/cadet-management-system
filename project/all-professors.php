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
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

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
        <div class="header" style="background:skyblue;">
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
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Admins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-professors.php">All Admins</a></li>
                          
                            <li><a href="edit-professor.php">Edit Admins</a></li>
                            
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
                            <li><a href="">Reserved</a>Reserved</li>
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
                            <h4>All Admins</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Admins</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Admins</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
							<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">All Admins </h4>
										<a href="add-professor.php" class="btn btn-primary">+ Add new</a>
									</div>
									<div class="card-body">
                                    <div class="card-body">
    <div class="table-responsive">
        <table id="example3" class="display" style="min-width: 845px">
            <thead>
                <tr>
                    <th></th>
                    <th>First Name</th>
					
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Rank</th>
                    <th>User ID</th>
                    <th>Email</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody><?php
    // Retrieve data from the database
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

    // Check if the delete button is clicked
    if (isset($_GET['delete_user'])) {
        $userid = $_GET['delete_user'];

        // Display a confirmation dialog using JavaScript
        echo '<script>
                if (confirm("Are you sure you want to delete this user?")) {
                    window.location.href = "?confirmed_delete_user=' . $userid . '";
                }
            </script>';
    }

    // Check if the user confirmed the deletion
    if (isset($_GET['confirmed_delete_user'])) {
        $userid = $_GET['confirmed_delete_user'];

        // Delete the user from the database
        $deleteSql = "DELETE FROM users WHERE userid = '$userid'";
        $conn->query($deleteSql);
    }

    // SQL SELECT query to retrieve data from the database
    $sql = "SELECT userid, fname, email, department, gender, rank, joindate FROM users";

    // Execute the query
    $result = $conn->query($sql);

    // Generate table rows dynamically based on the fetched data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo '<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>';
            echo "<td>" . $row["fname"] . "</td>";
            echo "<td>" . $row["department"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["rank"] . "</td>";
            echo "<td>" . $row["userid"] . "</td>";
            echo '<td><a href="javascript:void(0);"><strong>' . $row["email"] . '</strong></a></td>';
            echo '<td>
                  
                    <a href="?delete_user=' . $row["userid"] . '" class="btn btn-sm btn-danger" onclick="return confirmDelete();"><i class="la la-trash-o"></i></a>
                  </td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No data found.</td></tr>";
    }

    // Close the connection
    $conn->close();
?>
            </tbody>
        </table>
    </div>
</div>
									</div>
                                </div>
                            </div>
							<div id="grid-view" class="tab-pane fade col-lg-12">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									
														
													</div>
													<div class="card-body pt-2">
    <div class="text-center" style="display: flex; flex-wrap: wrap; justify-content: center;">
	
	
        <?php
        // Database configuration
        $hostname = 'localhost';  // Replace with your database hostname
        $username = 'root';  // Replace with your database username
        $password = '';  // Replace with your database password
        $database = 'tastebut';  // Replace with your database name

        // Create a connection
        $connection = mysqli_connect($hostname, $username, $password, $database);

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            die('Failed to connect to MySQL: ' . mysqli_connect_error());
        }

        // Perform a query to retrieve data
        $query = "SELECT fname, lname, rank,department,number, email FROM users";  // Replace with your table name
        $result = mysqli_query($connection, $query);

        // Check if the query was successful and if there are any rows returned
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through each row and display the data in a card
            while ($row = mysqli_fetch_assoc($result)) {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $rank = $row['rank'];
                $email = $row['email'];
				$department = $row['department'];
				$number = $row['number'];
                ?>
					
                <div class="card mb-4" style="width: 400px; margin: 20px;">
                    <div class="profile-photo">
                        <img src="images/profile/small/pic3.jpg" width="100" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="card-body">
					<h1> Profile Photo</h1>
                        <ul class="list-group mb-3 list-group-flush">
                            <li class="list-group-item px-0 d-flex justify-content-between">
                                <span>First Name.</span><strong><?php echo $fname; ?></strong>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between">
                                <span class="mb-0">Second Name. :</span><strong><?php echo $lname; ?></strong>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between">
                                <span class="mb-0">Rank :</span><strong><?php echo $rank; ?></strong>
                            </li>
							<li class="list-group-item px-0 d-flex justify-content-between">
                                <span class="mb-0">Department :</span><strong><?php echo $department; ?></strong>
                            </li>
							<li class="list-group-item px-0 d-flex justify-content-between">
                                <span class="mb-0">Phone No :</span><strong><?php echo $number; ?></strong>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between">
                                <span class="mb-0">Email:</span><strong><?php echo $email; ?></strong>
                            </li>
                        </ul>
                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
                    </div>
                </div>
                <?php
            }
        } else {
            // Handle query errors or display a default message
            ?>
            <h3 class="mt-4 mb-1">No data available</h3>
        <?php
        }

        // Free the result set
        mysqli_free_result($result);

        // Close the connection
        mysqli_close($connection);
        ?>
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
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
	
</body>
</html>