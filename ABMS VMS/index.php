<?php
$connect = mysqli_connect("localhost", "root", "", "vcm");
$query = "SELECT * FROM vaccines ORDER BY VaccineID DESC";
$result = mysqli_query($connect, $query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Data Tables CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- Sweet Alert CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    <div class="container">
        <h3 align="center">BANGIS: Vaccine Management System</h3>
        <div class="container pt-5">
        <button class="btn btn-primary" id="addVaccineButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Vaccine</button>
        </div>
        <table id="table" class="table table-striped table-bordered">
            <!-- Table header -->
            <thead class="thead-dark">
                <tr>
                    <th>Vaccine ID</th>
                    <th>Vaccine Name</th>
                    <th>Brand</th>
                    <th>Stock/Quantity</th>
                    <th>Dosage</th>
                    <th>Expiration Date</th>
                    <th>Date Added</th>
                    <th>Remarks</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $remarksClass = '';
                    switch ($row["Remarks"]) {
                        case 'Available':
                            $remarksClass = 'text-success'; // Green
                            break;
                        case 'Not Available':
                            $remarksClass = 'text-primary'; // Blue
                            break;
                        case 'Out of Stock':
                            $remarksClass = 'text-danger'; // Red
                            break;
                        default:
                            $remarksClass = ''; // Default class
                            break;
                    }

                    echo '
                    <tr>  
                        <td>' . $row["VaccineID"] . '</td>
                        <td>' . $row["VaccineName"] . '</td> 
                        <td>' . $row["Brand"] . '</td>     
                        <td>' . $row["StockQuantity"] . '</td>  
                        <td>' . $row["Dosage"] . '</td>  
                        <td>' . $row["ExpirationDate"] . '</td>  
                        <td>' . $row["DateAdded"] . '</td>  
                        <td class="' . $remarksClass . '">' . $row["Remarks"] . '</td>  
                        <td>
                        <button type="button" class="btn btn-primary edit-vaccine" data-bs-toggle="modal" data-bs-target="#editModal" id="'. $row["VaccineID"].'">Edit      </button>
                            <button class="btn btn-danger btn-sm delete-vaccine" data-id="' . $row["VaccineID"] . '">Delete</button>
                        </td>
                    </tr>  
                    ';
                }
                ?>
            </tbody>  
        </table>
    </div>

    <!-- Button trigger modal -->

<!--Add Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Vaccine</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form id="addVaccineForm">
                <div class="form-group">
                    <label for="vaccinename">Vaccine Name</label>
                    <input type="text" class="form-control" name="VaccineName" id="vaccinename" placeholder="Enter vaccine name" required>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" name="Brand" id="brand" placeholder="Enter Brand" required>
                </div>
                <div class="form-group">
                    <label for="stockquantity">Stock/Quantity</label>
                    <input type="number" class="form-control" name="StockQuantity" id="stockquantity" placeholder="Enter Quantity" required>
                </div>
                <div class="form-group">
                    <label for="dosage">Dosage</label>
                    <input type="text" class="form-control" name="Dosage" id="dosage" placeholder="Enter Dosage" required>
                </div>
                <div class="form-group">
                    <label for="expirationdate">Expiration Date</label>
                    <input type="date" class="form-control" name="ExpirationDate" id="expirationdate" placeholder="Enter Expiration Date" required>
                </div>
                <div class="form-group">
                    <label for="dateadded">Date Added</label>
                    <input type="date" class="form-control" name="DateAdded" id="dateadded" placeholder="Enter Date Added" required>
                </div> 
                <div class="form-group">
                    <label for="remarks">Remarks</label>
                        <select class="form-control" name="Remarks" id="remarks" required>
                            <option value="">Select Remarks</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                            <option value="Out of Stock">Out of Stock</option>
                        </select>
                </div>
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addButton">Add</button>
      </div>
    </div>
  </div>
</div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Vaccine</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-modal">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Your JavaScript code here -->
    <script src="index.js"></script>

</body>
</html>
