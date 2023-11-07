<?php
$connect = mysqli_connect("localhost", "root", "", "vcm");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the posted data
    $vaccineID = $_POST["VaccineID"];
    $vaccineName = $_POST["VaccineName"];
    $brand = $_POST["Brand"];
    $stockQuantity = $_POST["StockQuantity"];
    $dosage = $_POST["Dosage"];
    $expirationDate = $_POST["ExpirationDate"];
    $dateAdded = $_POST["DateAdded"];
    $remarks = $_POST["Remarks"];

    // Perform the update query
    $query = "UPDATE vaccines SET VaccineName = '$vaccineName', Brand = '$brand', StockQuantity = '$stockQuantity', Dosage = '$dosage', ExpirationDate = '$expirationDate', DateAdded = '$dateAdded', Remarks = '$remarks' WHERE VaccineID = $vaccineID";

    if (mysqli_query($connect, $query)) {
        echo "success"; // Send a success response
    } else {
        echo "error: " . mysqli_error($connect); // Send an error response
    }
} else {
    echo "error: Invalid request";
}
?>
