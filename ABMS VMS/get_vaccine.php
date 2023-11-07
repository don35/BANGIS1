<?php
$connect = mysqli_connect("localhost", "root", "", "vcm");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['vaccineID'])) {
    $vaccineID = $_POST['vaccineID'];

    // Perform SQL query to retrieve vaccine details by ID
    $query = "SELECT * FROM vaccines WHERE VaccineID = $vaccineID";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $vaccineData = mysqli_fetch_assoc($result);

        // Return the vaccine details as JSON
        echo json_encode($vaccineData);
    } else {
        echo 'error: ' . mysqli_error($connect);
    }
} 
?>

      <form id="editVaccineForm">
                        <!-- Add form fields for editing vaccine information here -->
                        <div class="form-group">
                            <label for="vaccinename">Vaccine Name</label>
                            <input type="text" class="form-control" id="editVaccineName" name="VaccineName" id="vaccinename" placeholder="Enter vaccine name" required>
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
            
                    <!-- Add more form fields for editing here -->
                </form>