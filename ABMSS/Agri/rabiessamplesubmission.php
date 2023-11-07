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
            <h1 class="title">Rabies Sample Submission</h1>
			<ul class="breadcrumbs">
				<li><a href="agri.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Rabies Sample Submission</a></li>
			</ul>   
    </main>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
    </button>

    <div style="overflow-x: auto;">
    <table id="example" class="table table-bordered table-striped" style="width:100%;">
        <thead class="thead-dark">
            <tr>
                <th colspan="19" class="text-center small">Animal Profile</th>
                <th colspan="14" class="text-center small">Victime Profile</th>
            </tr>
            <tr>
                <th class="text-center smalll">Laboratory Accession No.</th>
                <th class="text-center small">Date Submitted</th>
                <th class="text-center small">Residence of Animal for last 15 days</th>
                <th class="text-center small">Species</th>
                <th class="text-center small">Breed</th>
                <th class="text-center small">Sex</th>
                <th class="text-center small">Age(Months)</th>
                <th class="text-center small">Type of Ownership</th>
                <th class="text-center small">Pet Management</th>
                <th class="text-center small">Cause of Death</th>
                <th class="text-center small">Date</th>
                <th class="text-center small">Time</th>
                <th class="text-center small">Vaccination History</th>
                <th class="text-center small">Date of Last Vaccine</th>
                <th class="text-center small">For Puppies Was bitch Vaccinated</th>
                <th class="text-center small">If yes, Date:</th>
                <th class="text-center small">Contact with other Animals</th>
                <th class="text-center small">Behavior Changes</th>
                <th class="text-center small">Other Signs of Illness</th>
                <th class="text-center small">Name</th>
                <th class="text-center small">Age</th>
                <th class="text-center small">Sex</th>
                <th class="text-center small">Barangay</th>
                <th class="text-center small">City/Municipality</th>
                <th class="text-center small">Province</th>
                <th class="text-center small">Site of Exposure</th>
                <th class="text-center small">Bite Provoked?</th>
                <th class="text-center small">If yes Explain</th>
                <th class="text-center small">Location of Bite Incident</th>
                <th class="text-center small">Other Pls Specify</th>
                <th class="text-center small">Other Victim, If Any (Name, Address)</th>
                <th class="text-center small">Treatment Received</th>
                <th class="text-center small">Date treatment Received</th>
            </tr>
        </thead>
            <tbody>
                    <tr>
                        <td class="text-center small">LAB-98765</td>
                        <td class="text-center small">2023-11-10</td>
                        <td class="text-center small">Urban</td>
                        <td class="text-center small">Dog</td>
                        <td class="text-center small">Labrador</td>
                        <td class="text-center small">Male</td>
                        <td class="text-center small">24</td>
                        <td class="text-center small">Owned</td>
                        <td class="text-center small">Household</td>
                        <td class="text-center small">Rabies</td>
                        <td class="text-center small">2023-11-05</td>
                        <td class="text-center small">09:30 AM</td>
                        <td class="text-center small">Up-to-Date</td>
                        <td class="text-center small">2023-10-20</td>
                        <td class="text-center small">No</td>
                        <td class="text-center small">N/A</td>
                        <td class="text-center small">Yes</td>
                        <td class="text-center small">Lethargy</td>
                        <td class="text-center small">N/A</td>
                        <td class="text-center small">Jane Doe</td>
                        <td class="text-center small">35</td>
                        <td class="text-center small">Female</td>
                        <td class="text-center small">Barangay C</td>
                        <td class="text-center small">City Y</td>
                        <td class="text-center small">Province Z</td>
                        <td class="text-center small">Park</td>
                        <td class="text-center small">Yes</td>
                        <td class="text-center small">Aggressive dog</td>
                        <td class="text-center small">Arm</td>
                        <td class="text-center small">N/A</td>
                        <td class="text-center small">John Smith, 456 Elm St</td>
                        <td class="text-center small">First Aid</td>
                        <td class="text-center small">2023-11-05</td>
                    </tr>                           
            </tbody>
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
