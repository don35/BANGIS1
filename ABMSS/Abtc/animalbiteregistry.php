<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'ABTC') {
    header("Location: ../index.php");
    exit();
}

$query = "SELECT * FROM animal_bite_registry ORDER BY registration_no DESC";
$result = mysqli_query($con, $query);

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
    <!-- Add Data Modal -->
    <?php include '../sidebar.php'?>
    <?php include '../navbar.php'?>

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Animal Bite Registry</h1>
			<ul class="breadcrumbs">
				<li><a href="abtc.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Animal Bite Registry</a></li>
			</ul>
    </main> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        Add Data
    </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Import
        </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Print
        </button>

    <div style="overflow-x: auto;">
        <table id="example" class="table table-bordered table-striped table-lg" style="width:100%;">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2" class="text-center small">Registration No.</th>
                    <th></th>
                    <th></th>
                    <th colspan="7" class="text-center small">History of Exposure</th>
                    <th colspan="10" class="text-center small">Post Exposure Prophylaxis (PEP)</th>
                    <th class="text-center small">Outcome</th>
                    <th class="text-center small">Biting Animal Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th class="text-center small">No.</th>
                    <th class="text-center small">Date</th>
                    <th class="text-center small">Name of Patient</th>
                    <th class="text-center small">Address</th>
                    <th class="text-center small">Age</th>
                    <th class="text-center small">Sex</th>
                    <th class="text-center small">Date</th>
                    <th class="text-center small">Place(Where Biting Occurred)</th>
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
                    <th class="text-center small">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center small">1</td>
                    <td class="text-center small">2023-11-07</td>
                    <td class="text-center small">John Doe</td>
                    <td class="text-center small">123 Main St</td>
                    <td class="text-center small">30</td>
                    <td class="text-center small">Male</td>
                    <td class="text-center small">2023-11-05</td>
                    <td class="text-center small">Public Park</td>
                    <td class="text-center small">Dog</td>
                    <td class="text-center small">B</td>
                    <td class="text-center small">Leg</td>
                    <td class="text-center small">2</td>
                    <td class="text-center small">Y</td>
                    <td class="text-center small">2023-11-07</td>
                    <td class="text-center small">Intramuscular</td>
                    <td class="text-center small">Yes</td>
                    <td class="text-center small">Yes</td>
                    <td class="text-center small">No</td>
                    <td class="text-center small">No</td>
                    <td class="text-center small">No</td>
                    <td class="text-center small">RAB123</td>
                    <td class="text-center small">C</td>
                    <td class="text-center small">Alive</td>
                    <td class="text-center small">Some remarks about the incident</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<!-- Add Data Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="insert_data.php">
                    <!-- Input fields for each column in your table -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name of Patient</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <!-- Add more input fields as needed -->

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!--<h3>Dito sa abtc ang animal bite registry ay nakakapag add, delete and edit ng report then sa part naman ng agri ay for viewing and printing</h3>-->
    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
<script>
    $(document).ready(function (){
        $('#example').DataTable();
    });
</script>
</html>
