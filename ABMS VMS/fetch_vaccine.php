<?php
// Database connection
$connect = mysqli_connect("localhost", "root", "", "vcm");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vaccineID = mysqli_real_escape_string($connect, $_POST['vaccineID']);

    // Fetch the vaccine data based on the VaccineID
    $query = "SELECT * FROM vaccines WHERE VaccineID = '$vaccineID'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $vaccineData = mysqli_fetch_assoc($result);
        echo json_encode($vaccineData);
    } else {
        echo "Error: Vaccine not found";
    }
}
?>
