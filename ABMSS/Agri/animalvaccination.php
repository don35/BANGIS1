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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <!-- Include your header, sidebar, and other common elements -->
    <?php include 'sidebar.php'?>
    <?php include 'navbar.php'?>

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Animal Vaccination</h1> 
			<ul class="breadcrumbs">
				<li><a href="agri.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Animal Vaccination</a></li>
			</ul>
    </main>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Add Data
    </button>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Import
    </button>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
    </button>

    <div style="overflow-x: auto;">
        <table id="example" class="table table-bordered table-striped" style="width:100%;">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="4" class="text-center small">Client Information</th>
                    <th colspan="10" class="text-center small">Animal Information and Service Rendered</th>
                    <th></th>
                </tr>
                <tr>
                    <th class="text-center small">Date</th>
                    <th class="text-center small">Barangay</th>
                    <th class="text-center small">Name</th>
                    <th class="text-center small">Birthday</th>
                    <th class="text-center small">Sex</th>
                    <th class="text-center small">Contact #</th>
                    <th class="text-center small">Name of Pet</th>
                    <th class="text-center small">Species</th>
                    <th class="text-center small">Breed</th>
                    <th class="text-center small">Pet Sex</th>
                    <th class="text-center small">Age</th>
                    <th class="text-center small">Color</th>
                    <th class="text-center small">Registered/ID #</th>
                    <th class="text-center small">Neutered</th>
                    <th class="text-center small">Origin</th>
                    <th class="text-center small">Remarks/Head of the family</th>
                    <th class="text-center small">Actions</th>
                </tr>
                <tbody>
                <tr>
                        <td>2023-11-07</td>
                        <td>Wawa Batangas City</td>
                        <td>John Doe</td>
                        <td>1996-11-09</td>
                        <td>Male</td>
                        <td>09198002123</td>
                        <td>Fido</td>
                        <td>Dog</td>
                        <td>Golden Retriever</td>
                        <td>Male</td>
                        <td>3</td>
                        <td>Golden</td>
                        <td>REG123</td>
                        <td>Yes</td>
                        <td>Shelter</td>
                        <td>Some remarks about the pet</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
            <!-- More rows go here -->
        </tbody>
            </thead>
            <!-- Your table body content goes here -->
        </table>
    </div>

    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
<script>
    $(document).ready(function (){
        $('#example').DataTable();
    });
</script>
</html>
