<?php
include("../config/db.php");

$users = [];
$output = '';


$id = $_SESSION['id'];
$SQL = mysqli_query($con, "SELECT * FROM user_account WHERE id = '$id'");
$profilArray = [];

while ($row = mysqli_fetch_assoc($SQL)) {
    $profilArray[0] = $row['id'];
    $profilArray[1] = $row['name'];
    $profilArray[2] = $row['email'];
    $profilArray[3] = $row['username'];
    $profilArray[4] = $row['locatio'];
    $profilArray[5] = $row['statu'];
    $profilArray[6] = $row['gender'];
    $profilArray[7] = $row['phone'];
    $profilArray[8] = $row['department'];
    $profilArray[9] = $row['dob'];
    $profilArray[10] = $row['create_at'];
    $profilArray[11] = $row['profile_pic'];
    $profilArray[12] = $row['about'];
    $profilArray[13] = $row['on_off'];
}

$USERS = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 10");
$output .= '<ul class="list-group">';
while ($data = mysqli_fetch_assoc($USERS)) {
    $output .= '
        <li class="list-group-item">
            <a href="#">' . $data['name'] . '</a>
        </li>
    ';
}
$output .= '</ul>';