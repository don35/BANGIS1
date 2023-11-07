<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'Agri') {
    header("Location: ../index.php");
    exit();
}

// Assuming you have a database connection
// $conn = new mysqli("hostname", "username", "password", "database");

// Query to retrieve vaccinated animal records
$query = "SELECT * FROM rabiesexposure"; // Change this query to match your database table
$result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your meta tags, stylesheets, and other head content -->

</head>
<body>
    <!-- Include your header, sidebar, and other common elements -->
    <?php include 'sidebar.php'?>
    <?php include 'navbar.php'?>

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Communication</h1>
			<ul class="breadcrumbs">
				<li><a href="agri.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Communication</a></li>
			</ul>
            
    </main>

    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
</html>
