<?php
$connect = mysqli_connect("localhost", "root", "", "vcm");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["VaccineID"])) {
    $vaccineID = $_POST["VaccineID"];

    $query = "DELETE FROM vaccines WHERE VaccineID = $vaccineID";

    if (mysqli_query($connect, $query)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_close($connect);
}
?>
