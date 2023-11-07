<?php include '../include/links.php'?>

<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'ABTC') {
    header("Location: ../index.php");
    exit();
}
?>

<?php
    $connect = mysqli_connect("localhost", "root", "", "abms");
    $query = "SELECT * FROM animal_bite_registry ORDER BY VaccineID DESC";
    $result = mysqli_query($connect, $query);
?>

<?php include '../database/dbcon.php'?>

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
    <?php include '../sidebar.php'?>
    <?php include '../navbar.php'?>

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Animal Vaccination Registry</h1>
			<ul class="breadcrumbs">
				<li><a href="abtc.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Animal Vaccination Registry</a></li>
			</ul>
    </main> 
    <div style="overflow-x: auto;">
    <table id="example" class="table table-bordered table-striped" style="width:100%;">
        <thead class="thead-dark">
            <tr>
                <th><th>
                <th colspan="4" class="text-center small">Client Information</th>
                <th colspan="9" class="text-center small">Animal Information and Service Rendered</th>
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
                
            </tr>
        </thead>
        <tbody>
                    <tr>
                        <td class="text-center small">2023-11-07</td>
                        <td class="text-center small">Wawa Batangas City</td>
                        <td class="text-center small">John Doe</td>
                        <td class="text-center small">1996-11-09</td>
                        <td class="text-center small">Male</td>
                        <td class="text-center small">09198002123</td>
                        <td class="text-center small">Fido</td>
                        <td class="text-center small">Dog</td>
                        <td class="text-center small">Golden Retriever</td>
                        <td class="text-center small">Male</td>
                        <td class="text-center small">3</td>
                        <td class="text-center small">Golden</td>
                        <td class="text-center small">REG123</td>
                        <td class="text-center small">Yes</td>
                        <td class="text-center small">Shelter</td>
                        <td class="text-center small">Some remarks about the pet</td>
                    </tr>
            <!-- More rows go here -->
        </tbody>
        <!-- Your table body content goes here -->
    </table>
</div>

    <!--<h3>Eto ay printing and viewing lamang ng ABTC bale eto ay nasa Agri side which is sila ang nag mamanage ng lahat ng data/reports</h3>-->


    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
<script>
    $(document).ready(function (){
        $('#example').DataTable();
    });
</script>
</html>
