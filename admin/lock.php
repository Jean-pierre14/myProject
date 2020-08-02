<?php
include("../config/db.php");

// Variables
$username = '';
$name = '';
$email = '';
$location = '';
$phones = '';
$status = '';
$gender = '';
$depart = '';
$dob = '';
$about = '';

session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
    header('location: ../login.php');
    exit();
}
$id = $_SESSION['id'];
$selectUser = "SELECT * FROM user_account WHERE id = '$id'";
$runUser = mysqli_query($con, $selectUser);

$on = mysqli_query($con, "UPDATE user_account SET on_off = 'online' WHERE id = '$id'");
?>