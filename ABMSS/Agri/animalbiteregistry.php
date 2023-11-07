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
            <h1 class="title">Animal Bite Registry</h1>
			<ul class="breadcrumbs">
				<li><a href="agri.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Animal Bite Registry</a></li>
			</ul>
    </main>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
    </button>

    <div style="overflow-x: auto;">
    <table id="example" class="table table-bordered table-striped" style="width:100%;">
        <thead class="thead-dark">
            <tr>
                <th colspan="2" class="text-center small">Registration No.</th>
                <th></th>
                <th></th>
                <th colspan="7" class="text-center small">History of Exposure</th>
                <th colspan="10" class="text-center small">Post Exposure Prophylaxis(PEP)</th>
                <th colspan="1" class="text-center small">Outcome</th>
                <th colspan="1" class="text-center small">Biting Animal Status</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="text-center small">No.</th>
                <th class="text-center small">Date</th>
                <th class="text-center small">Name of Patient</th>
                <th class="text-center small">Addess</th>
                <th class="text-center small">Age</th>
                <th class="text-center small">Sex</th>
                <th class="text-center small">Date</th>
                <th class="text-center small">Place(Where Biting Occured)</th>
                <th class="text-center small">Type of Animal</th>
                <th class="text-center small">Type(B/NB)</th>
                <th class="text-center small">Site(Body Parts)</th>
                <th class="text-center small">Category(1, 2 and 3)</th>
                <th class="text-center small">Washing of Bite(Y/N)</th>
                <th class="text-center small">RIG Date Given</th>
                <th class="text-center small">Route</th>
                <th class="text-center small">D0</th>
                <th class="text-center small">D3</th>
                <th class="text-center small">D7</th>
                <th class="text-center small">D14(1M)</th>
                <th class="text-center small">D28</th>
                <th class="text-center small">Brand Name</th>
                <th class="text-center small">(C/Inc/N/D)</th>
                <th class="text-center small">(after 4 days)(Alive/Dead/Lost)</th>
                <th class="text-center small">Remarks</th>
            </tr>
        </thead>
                <td>1</td> 
                <td>2023-11-07</td> 
                <td>John Doe</td> 
                <td>123 Main St</td> 
                <td>30</td> 
                <td>Male</td> 
                <td>2023-11-05</td> 
                <td>Public Park</td> 
                <td>Dog</td> 
                <td>B</td> 
                <td>Leg</td> 
                <td>2</td> 
                <td>Y</td> 
                <td>2023-11-07</td> 
                <td>Intramuscular</td> 
                <td>Yes</td> 
                <td>Yes</td> 
                <td>No</td> 
                <td>No</td> 
                <td>No</td> 
                <td>RAB123</td> 
                <td>C</td> 
                <td>Alive</td> 
                <td>Some remarks about the incident</td>
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
