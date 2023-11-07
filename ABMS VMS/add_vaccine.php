<?php
$connect = mysqli_connect("localhost", "root", "", "vcm");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vaccineName = $_POST["VaccineName"];
    $brand = $_POST["Brand"];
    $stockQuantity = $_POST["StockQuantity"];
    $dosage = $_POST["Dosage"];
    $expirationDate = $_POST["ExpirationDate"];
    $dateAdded = $_POST["DateAdded"];
    $remarks = $_POST["Remarks"];

    $query = "INSERT INTO vaccines (VaccineName, Brand, StockQuantity, Dosage, ExpirationDate, DateAdded, Remarks)
              VALUES ('$vaccineName', '$brand', $stockQuantity, '$dosage', '$expirationDate', '$dateAdded', '$remarks')";

    if (mysqli_query($connect, $query)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_close($connect);
}
?>
