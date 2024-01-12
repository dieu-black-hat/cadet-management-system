<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // User is logged in, handle the logout process
    if (isset($_GET['logout'])) {
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
        <div class="nav-header" >
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
        <a href="app-profile.php" class="dropdown-item ai-icon">
            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <span class="ml-2">Profile</span>
        </a>
        <a href="email-inbox.html" class="dropdown-item ai-icon">
            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span class="ml-2">Inbox</span>
        </a>
        <a href="?logout" class="dropdown-item ai-icon">
            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            <span class="ml-2">Logout</span>
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
                            <h4>All Cadets</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Cadets</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Cadets</a></li>
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
                                        <h4 class="card-title">All Cadets List </h4>
                                        <a href="add-student.html" class="btn btn-primary">+ Add new</a>
                                    </div>
                                    <div class="card-body">
    <div class="table-responsive">
        <table id="example3" class="display" style="min-width: 845px">
            <thead>
                <tr>
                    <th>Cadet ID</th>
                   
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Gender</th>
                    <th>Company</th>
                    <th>Platoon</th>
                    <th>Mobile</th>
                    <th>Intake</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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

// Check if the delete button is clicked
if (isset($_GET['delete_user'])) {
    $deleteUserId = $_GET['delete_user'];

    // Delete the user from the database
    $deleteSql = "DELETE FROM cadet WHERE number = '$deleteUserId'";
    $conn->query($deleteSql);
}

// SQL SELECT query to retrieve data from the database, filtered by user ID if the role is Platoon Commander
if ($role_name === 'Platoon Commander') {
    $sql = "SELECT c.rollno, c.fname, c.lname, c.gender, c.company, c.platoon, c.number 
            FROM cadet c
            JOIN user_cadet_assignment ua ON c.cadetid = ua.cadetid
            WHERE ua.userid = '$userid'";
}
// SQL SELECT query to retrieve all cadets from the database if the role is Admin
elseif ($role_name === 'admin') {
    $sql = "SELECT rollno, fname, lname, gender, company, platoon, number 
            FROM cadet";
}
// SQL SELECT query to retrieve cadets for specific platoons and a particular company if the role is Company Commander
elseif ($role_name === 'Company Commander') {
    $sql = "SELECT c.rollno, c.fname, c.lname, c.gender, c.company, c.platoon, c.number 
            FROM cadet c
            JOIN user_cadet_assignment ua ON c.cadetid = ua.cadetid
            WHERE c.company = 'A- Company' AND c.platoon IN ('P-1', 'P-2', 'P-3')";
}
// SQL SELECT query to retrieve all cadets from the database if the role is Health
elseif ($role_name === 'Health') {
    $sql = "SELECT rollno, fname, lname, gender, company, platoon, number 
            FROM cadet";
}
// SQL SELECT query to retrieve all cadets from the database if the role is Instructor
elseif ($role_name === 'Instructor') {
    $sql = "SELECT rollno, fname, lname, gender, company, platoon, number 
            FROM cadet";
}
else {
    // Redirect other roles to a different page or display an error message
    header("page-error-400.html");
    exit();
}

// Execute the query
$result = $conn->query($sql);

// Rest of your code to display the cadets
?>

<!-- Rest of your HTML code for displaying the table -->

<?php if ($result->num_rows > 0) : ?>
   
              
                
                    <?php $counter = 1; ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['lname'] ;?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['company']; ?></td>
                            <td><?php echo $row['platoon']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><a href='javascript:void(0);'><strong><?php echo  $row["rollno"];?> </strong></a></td>
                       
                            <td>
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                <a href="?delete_user=<?php echo $row['number']; ?>" onclick="return confirm('Are you sure you wantto delete this user?');" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php else : ?>
    <p>No cadets found.</p>
<?php endif; ?>
<?php
// Close the connection
$conn->close();
?>
                                </div>

                            </div>
                            <div id="grid-view" class="tab-pane fade col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card-body pt-2" style="width: 65rem;">
    <div class="card-container">
        <?php
        // Database configuration
        $hostname = 'localhost';  // Replace with your database hostname
        $username = 'root';  // Replace with your database username
        $password = '';  // Replace with your database password
        $database = 'tastebut';  // Replace with your database name

        // Image location configuration
        $imageLocation = 'images/profile/';  // Replace with the base image location

        // Create a connection
        $connection = mysqli_connect($hostname, $username, $password, $database);

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            die('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
        

        // Perform a query to retrieve data
        $query = "SELECT  fname, lname,  company, platoon, number, profile_image,cadetid FROM cadet";  // Replace with your table name
        $result = mysqli_query($connection, $query);

        // Check if the query was successful and if there are any rows returned
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through each row and display the data in a card
            $count = 0;
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result)) {
                $cadetid = $row['cadetid'];
                $number = $row['number'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $company = $row['company'];
                $platoon = $row['platoon'];
                $number = $row['number'];
                $profileImage = $row['profile_image'];
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="profile-photo d-flex justify-content-center align-items-center">
                            <?php if (!empty($profileImage)) : ?>
                                <div style="width: 140px; height: 140px; overflow: hidden; border-radius: 50%;">
                                    <img src="<?php echo $imageLocation . $profileImage; ?>" style="object-fit: cover; width: 100%; height: 100%;" class="rounded-circle" alt="">
                                </div>
                            <?php else : ?>
                                <div style="width: 140px; height: 140px; overflow: hidden; border-radius: 50%;">
                                    <img src="<?php echo $imageLocation . 'default.jpg'; ?>" style="object-fit: cover; width: 100%; height: 100%;" class="rounded-circle" alt="Cadet Profile Photo">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <ul class="list-group mb-3 list-group-flush">
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span>First Name:</span><strong><?php echo $fname; ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Last Name:</span><strong><?php echo $lname; ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Company:</span><strong><?php echo $company; ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Platoon:</span><strong><?php echo $platoon; ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="mb-0">Reg No:</span><strong><?php echo $cadetid; ?></strong>
                                </li>
                            </ul>
                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" name="number" id="number" href="about-student.php?cadetid=<?php echo $cadetid; ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
                $count++;
                if ($count % 3 === 0) {
                    echo '</div><div class="row">'; // Start a new column of cards after every three cards
                }
            }
            echo '</div>'; // Close the last row
        } else {
            // Handle query errors or display a default message
            ?>
            <h3 class="mt-4 mb-1">No data available</h3>
            <?php
        }

        // Free the result set
        mysqli_free_result($result);

        // Closethe connection
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