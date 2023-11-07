<!-- Edit Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Vaccine</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form id="editVaccineForm" method="POST" action="update_vaccine.php">
                        <!-- Add form fields for editing vaccine information here -->
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
                    <!-- Add more form fields for editing here -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button>
            </div>
        </div>
    </div>
</div>