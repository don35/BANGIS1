<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php


// Assuming you have a database connection
// $conn = new mysqli("hostname", "username", "password", "database");

// Query to retrieve vaccinated animal records
//$query = "SELECT * FROM tblusers";
//$result = $con->query($query);

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
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Manage Accounts</h1>
			<ul class="breadcrumbs">
				<li><a href="admin.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Manage Accounts</a></li>
			</ul>
    </main>

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            Add New User 
        </button>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
        </button>

    <div style="overflow-x: auto;">
    <table id="example" class="table table-bordered table-striped" style="width:100%;">
        <thead class="thead-dark">
            <tr>
                <th class="text-center small">User ID</th>
                <th class="text-center small">Username</th>
                <th class="text-center small">Role</th>
                <th class="text-center small">Status</th>
                <th class="text-center small">Password</th>
                <th class="text-center small">Actions</th>
            </tr>
        </thead>   
        <tbody>
                <tr>
                    <td class="text-center small">1</td> 
                    <td class="text-center small">Batangas Provincial Health Office</td> 
                    <td class="text-center small">ABTC</td> 
                    <td class="text-center small">Active</td> <!--Eto ay may kulay green pag active, red pag unactive-->
                    <td class="text-center small">Edwdqjdvwsuhylqrgf khoofkrfkduf</td> 
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td> 
                </tr>                              
            </tbody>                     
    </table>
    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
<script>
    $(document).ready(function (){
        $('#example').DataTable();
    });
</script>
</html>
