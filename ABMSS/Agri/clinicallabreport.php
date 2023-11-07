<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'Agri') {
    header("Location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/lab.css">
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
            <h1 class="title">Clinical Lab Report</h1>
			<ul class="breadcrumbs">
				<li><a href="agri.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Clinical Lab Report</a></li>
			</ul>     
    </main>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
        </button>
    <div style="overflow-x: auto;">
        <table id="example" class="table table-bordered table-striped table-lg" style="width:100%;">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="10" class="text-center small">Client Information</th>
                    <th colspan="5" class="text-center small">Specimen Information</th>
                    <th colspan="5" class="text-center small">Results</th>
                    
                <tr>
                    <th class="text-center small">Laboratory Accesion No.</th>
                    <th class="text-center small">Lab Report No.</th>
                    <th class="text-center small">Date Received</th>
                    <th class="text-center small">Date Reported</th>
                    <th class="text-center small">Owner</th>
                    <th class="text-center small">Barangay</th>
                    <th class="text-center small">City/Municipality</th>
                    <th class="text-center small">Province</th>
                    <th class="text-center small">Contact No.</th>
                    <th class="text-center small">Province</th>
                    <th class="text-center small">Contact No.</th>
                    <th class="text-center small">Sender</th>
                    <th class="text-center small">Barangay</th>
                    <th class="text-center small">City/Municipality</th>
                    <th class="text-center small">Province</th>
                    <th class="text-center small">Contact No.</th>
                    <th class="text-center small">Specimen</th>
                    <th class="text-center small">Species</th>
                    <th class="text-center small">Breed</th>
                    <th class="text-center small">Age</th>
                    <th class="text-center small">Sex</th>
                    <th class="text-center small">Flourisent Antibody Test (FAT)</th>
                    <th class="text-center small">Diagnosis</th>
                    <th class="text-center small">Reommendation</th>
                    <th class="text-center small">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center small">LAB-12345</td>
                    <td class="text-center small">RPT-67890</td>
                    <td class="text-center small">2023-11-01</td>
                    <td class="text-center small">2023-11-05</td>
                    <td class="text-center small">John Doe</td>
                    <td class="text-center small">Barangay A</td>
                    <td class="text-center small">City X</td>
                    <td class="text-center small">Province Y</td>
                    <td class="text-center small">123-456-7890</td>
                    <td class="text-center small">Province W</td>
                    <td class="text-center small">987-654-3210</td>
                    <td class="text-center small">Sender Name</td>
                    <td class="text-center small">Barangay B</td>
                    <td class="text-center small">City Z</td>
                    <td class="text-center small">Province V</td>
                    <td class="text-center small">123-987-6543</td>
                    <td class="text-center small">Blood Sample</td>
                    <td class="text-center small">Dog</td>
                    <td class="text-center small">Labrador</td>
                    <td class="text-center small">4 years</td>
                    <td class="text-center small">Male</td>
                    <td class="text-center small">Positive</td>
                    <td class="text-center small">Rabies</td>
                    <td class="text-center small">Quarantine</td>
                    <td class="text-center small">Some remarks about the test</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
    <script>
    $(document).ready(function (){
        $('#example').DataTable();
    });
</script>
</body>
</html>
