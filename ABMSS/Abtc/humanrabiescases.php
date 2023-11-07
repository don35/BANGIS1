<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'ABTC') {
    header("Location: ../index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/abtc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

</head>
<body>
    <!-- Include your header, sidebar, and other common elements -->
    <?php include '../sidebar.php'?>
    <?php include '../navbar.php'?>

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Human Rabies Cases</h1>
			<ul class="breadcrumbs">
				<li><a href="abtc.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Human Rabies Cases</a></li>
			</ul>
    </main>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Data</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Import</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Print</button>

    <div style="overflow-x: auto;">
    <table id="example" class="table table-bordered table-striped" style="width:100%;">
        <thead class="thead-dark">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3" class="text-center small">Place of Residence</th>
                <th colspan="3" class="text-center small">Place of Exposure</th>
                <th colspan="3" class="text-center small">Place of Death</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="text-center small">Date Reported</th>
                <th class="text-center small">Name of Bite Victim</th>
                <th class="text-center small">Date of Exposure</th>
                <th class="text-center small">Barangay</th>
                <th class="text-center small">City/Municipality</th>
                <th class="text-center small">Province</th>
                <th class="text-center small">Barangay</th>
                <th class="text-center small">City/Municipality</th>
                <th class="text-center small">Province</th>
                <th class="text-center small">Barangay</th>
                <th class="text-center small">City/Municipality</th>
                <th class="text-center small">Province</th>
                <th class="text-center small">Date of Onset of Clinical Signs</th>
                <th class="text-center small">Status</th>
                <th class="text-center small">Date of Death</th>
                <th class="text-center small">Remarks</th>
                <th class="text-center small">Actions</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center small">2023-11-10</td>
                <td class="text-center small">John Doe</td>
                <td class="text-center small">2023-11-05</td>
                <td class="text-center small">Barangay A</td>
                <td class="text-center small">City X</td>
                <td class="text-center small">Province P</td>
                <td class="text-center small">Barangay B</td>
                <td class="text-center small">City Y</td>
                <td class="text-center small">Province Q</td>
                <td class="text-center small">Barangay C</td>
                <td class="text-center small">City Z</td>
                <td class="text-center small">Province R</td>
                <td class="text-center small">2023-11-06</td>
                <td class="text-center small">Deceased</td>
                <td class="text-center small">2023-11-09</td>
                <td class="text-center small">N/A</td>
                <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td> 
            </tr>
            
        </tbody>
        
    </table>
</div>
    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
</html>
