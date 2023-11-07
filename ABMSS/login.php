<?php
session_start();
include "database/dbcon.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function loginAdmin($con, $uname, $pass) {
    global $con;

    $sql = "SELECT * FROM tblusers WHERE BINARY username = ? AND BINARY password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['role'] = $row['role'];
        header("Location: admin/admin.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }
}

function loginAbtc($con, $uname, $pass) {
    global $con;

    $sql = "SELECT * FROM tblusers WHERE BINARY username = ? AND BINARY password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['role'] = $row['role'];
        header("Location: Abtc/abtc.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }
}


function loginAgri($con, $uname, $pass) {
    global $con;

    $sql = "SELECT * FROM tblusers WHERE BINARY username = ? AND BINARY password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['role'] = $row['role'];
        header("Location: Agri/agri.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }
}

function loginLaboratory($con, $uname, $pass) {
    global $con;

    $sql = "SELECT * FROM tblusers WHERE BINARY username = ? AND BINARY password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['role'] = $row['role'];
        header("Location: laboratory/laboratory.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }
}

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        header("Location: index.php?error=Username and Password are required");
        exit();
    } else {
        // Check the user's role and call the corresponding login function
        $sql = "SELECT role FROM tblusers WHERE BINARY username = ? AND BINARY password = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $uname, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            switch ($row['role']) {
                case 'admin':
                    loginAdmin($con, $uname, $pass);
                    break;
                case 'ABTC':
                    loginAbtc($con, $uname, $pass);
                    break;
                case 'Agri':
                    loginAgri($con, $uname, $pass);
                    break;
                case 'LABORATORY':
                    loginLaboratory($con, $uname, $pass);
                    break;
                // Add more cases for additional roles, if needed
                default:
                    exit();
            }
        } else {
            header("Location: index.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
