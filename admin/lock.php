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

$output = '';

session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
    header('location: ../login.php');
    exit();
}
$id = $_SESSION['id'];
$selectUser = "SELECT * FROM user_account WHERE id = '$id'";
$runUser = mysqli_query($con, $selectUser);

while ($data = mysqli_fetch_assoc($runUser)) {
    $UserData = array();

    $UserData[0] = $data['id'];
    $UserData[1] = $data['name'];
    $UserData[2] = $data['username'];
    $UserData[3] = $data['email'];
    $UserData[4] = $data['pass'];
    $UserData[5] = $data['locatio'];
    $UserData[6] = $data['statu'];
    $UserData[7] = $data['gender'];
    $UserData[8] = $data['phone'];
    $UserData[9] = $data['department'];
    $UserData[10] = $data['dob'];
    $UserData[11] = $data['create_at'];
    $UserData[12] = $data['profile_pic'];
    $UserData[13] = $data['about'];
}

$on = mysqli_query($con, "UPDATE user_account SET on_off = 'online' WHERE id = '$id'");

$team = 'Genuis Team';
$devise = 'Put God first';