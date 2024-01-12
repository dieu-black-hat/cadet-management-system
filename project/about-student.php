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
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
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

// Retrieve the user number from the URL parameter
if (isset($_GET['cadetid']) && !empty($_GET['cadetid'])) {
    $cadetid = $_GET['cadetid'];

    // Debugging statement to check the number value
    echo 'Cadetid No: ' . $cadetid . '<br>';

    // Perform a query to retrieve the user's details based on the number
    $query = "SELECT fname, lname,number, cadetid, company, platoon FROM cadet WHERE cadetid = '$cadetid'"; // Replace 'cadet' with your table name
    $result = mysqli_query($connection, $query);

    // Check if the query was successful and if there is a row returned
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the user's details
        $row = mysqli_fetch_assoc($result);
        $cadetid = $row['cadetid'];
        $number = $row['number'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $company = $row['company'];
        $platoon = $row['platoon'];
     
        // Display the user's details
      
    } else {
        // Handle errors or display a default message if the user is not found
        echo 'User not found.';
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle errors or display a default message if the number is not provided
    echo 'Phone No not provided.';
}

// Close the connection
mysqli_close($connection);
?>
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
                    <p><strong>O/CDT Diudonne is in red</strong> 
                    <p><strong>O/CDT Elyse is in red</strong> 
                    <p><strong>O/CDT Diudonne is in blue</strong>
                </a>
            </div>
            <span class="notify-time"><?php echo date('h:i a'); ?></span>
        </li>
    </ul>
    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
</div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                              
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
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
                            <h4>About Cadets</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Cadets</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">About Cadets</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
          
       
                                    <div class="text-center p-3 overlay-box" style="background-image: url(images/big/img.jpg);">
                                       
                                        <h3 class="mt-3 mb-1 text-white"><?php echo $fname . ' ' . $lname; ?></h3>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Intake</span> <strong class="text-muted"><?php echo $number; ?></strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Compony: </span> <strong class="text-muted"><?php echo $company; ?>	</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Platoon:</span> <strong class="text-muted"> <?php echo $platoon; ?>	</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Cadet ID</span> <strong class="text-muted"><?php echo $cadetid; ?></strong></li>
                                        
                                    </ul>
                                    <div class="card-footer text-center border-0 mt-0">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-rounded px-4">View More</a>
                                        <a href="javascript:void(0);" class="btn btn-warning btn-rounded px-4">Extra Messege</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12">

                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-9 col-xxl-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About    <?php echo $fname . ' ' . $lname; ?></a></li>
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link">Upload Statement</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-personal-info pt-4">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Number of Statements: <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>00</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Health Status: <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>None</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Descipline Status: <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>None</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                       
                                                    </div>
                                                </div>

                                              
                                                <div class="profile-about-me">
                                                    <div class="border-bottom-1 pb-4">

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="my-posts" class="tab-pane fade">
        <div class="my-post-content pt-3">
            <div class="post-input">
                <form action="" method="POST" enctype="multipart/form-data">
                    <textarea name="statementdescription" id="statementdescription" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please Describe the statement as an instructor...."></textarea>
                    <input type="file" name="statementfile" id="statementfile" class="dropify" data-default-file="">
                    <input type="tel" name="cadetid" id="cadetid" class="form-control" style="width: 150px; height: 50px;" placeholder="Enter Cadet ID" required>
                    <?php
// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Check if the user has the "admin" role or the "instructor" role or the "health" role
    if ($_SESSION['role_name'] === 'admin' || $_SESSION['role_name'] === 'Instructor' || $_SESSION['role_name'] === 'Health') {
        // User has admin, instructor, or health privileges
        // Display the "Upload Statement" button
        ?>
        <input type="submit" class="btn btn-primary" value="Upload Statement">
        <?php
    } else {
        // User does not have admin, instructor, or health privileges
        // Hide the "Upload Statement" button
        // You can add CSS to hide the button or use other methods
    }
} else {
    // User is not logged in
    // Redirect to the login page or handle accordingly
    // ...
}
?>
                </form>
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
function getTotalCadetCount($conn, $cadetid)
{
    $query = "SELECT COUNT(cadetid) AS total_cadets FROM approved_statements WHERE cadetid = $cadetid";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['total_cadets'];
}

// Check if cadetid is provided in the URL parameter
if (isset($_GET['cadetid']) && !empty($_GET['cadetid'])) {
    $cadetid = $_GET['cadetid'];

    // Get the total cadet count
    $totalCadets = getTotalCadetCount($conn, $cadetid);
} else {
    // Handle the case when cadetid is not provided in the URL parameter
    $totalCadets = 0;
}

// Determine the color class and message based on the number of statements
$colorClass = '';
$message = '';
if ($totalCadets == 0) {
    $colorClass = 'bg-warning';
    $message = 'High discipline';
} elseif ($totalCadets >= 1 && $totalCadets <= 2) {
    $colorClass = 'bg-primary';
    $message = 'Good discipline';
} elseif ($totalCadets >= 3 && $totalCadets <= 4) {
    $colorClass = 'bg-success';
    $message = 'Moderate discipline';
} elseif ($totalCadets >= 5) {
    $colorClass = 'bg-danger';
    $message = 'Low discipline';
}

// Close the database connection
$conn->close();
?>
<?php
// Check if the user has the required role

$validRoles = array('admin', 'Platoon Commander', 'Company Commander');
if (isset($_SESSION['role_name']) && in_array($_SESSION['role_name'], $validRoles)) {
    $role_name = $_SESSION['role_name'];
    // User has the required role, display the content
    ?>
    <div class="widget-stat card <?php echo $colorClass; ?>">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">No of statements</p>
                    <h3 class="text-white"><?php echo $totalCadets; ?></h3>

                    <div class="progress mb-2 bg-white">
                        <div class="progress-bar <?php echo $colorClass; ?>" style="width: <?php echo ($totalCadets == 0) ? '100%' : min($totalCadets * 20, 100) . '%'; ?>" role="progressbar"></div>
                    </div>
                    <?php if ($totalCadets == 0) : ?>
                        <small><?php echo $message; ?></small>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
// Check if the user has the required role

$validRoles = array('admin', 'platoon commander', 'Company Commander');
if (isset($_SESSION['role_name']) && in_array($_SESSION['role_name'], $validRoles)) {
    $role_name = $_SESSION['role_name'];
    // User has the required role, display the content
    ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title">Discipline Progress bar</h4>
            </div>
            <div class="card-body">
                <h6>Discipline Ranking
                    <span class="pull-right"><?php echo ($totalCadets == 0) ? '100%' : min($totalCadets * 20, 100) . '%'; ?></span>
                </h6>
                <div class="progress">
                    <div class="progress-bar <?php echo $colorClass; ?> progress-animated" style="width: <?php echo ($totalCadets == 0) ? '100%' : min($totalCadets * 20, 100) . '%'; ?>; height:6px;" role="progressbar">
                        <span class="sr-only"><?php echo ($totalCadets == 0) ? '100%' : min($totalCadets * 20, 100) . '% Complete'; ?></span>
                    </div>
                </div>

                <?php if ($totalCadets > 0) : ?>
                    <small><?php echo $message; ?></small>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
}
?><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have already established a database connection

    // Get the statement description
    $statementDescription = $_POST['statementdescription'];

    // Get the uploaded file
    $statementFile = $_FILES['statementfile'];

    // Get the phone number
    $cadetid = $_POST['cadetid'];

    // Database connection details
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

    // Check for file upload errors
    if ($statementFile['error'] !== UPLOAD_ERR_OK) {
        echo "Error uploading file: " . $statementFile['error'];
        // Handle the error appropriately
        exit();
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO statements (cadetid, statementdescription, statementfile) VALUES (?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("iss", $cadetid, $statementDescription, $statementFile['name']);

    // Execute the statement
    if ($stmt->execute()) {
        // Move the uploaded file to a desired location
        $uploadDirectory = "C:/XAMPP2/htdocs/CDT MS PROJECT/cadet_admin_dashboard/project/";
        $targetFilePath = $uploadDirectory . $statementFile['name'];
        
        if (move_uploaded_file($statementFile['tmp_name'], $targetFilePath)) {
            echo "Upload successful.";
        } else {
            echo "Error moving the file.";
        }
    } else {
        echo "Error uploading statement: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
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

</body>
</html>