<?php
require_once("../config/db.php");

$output = '';

$Id = $_SESSION['id'];
$user_array = array();

$User = mysqli_query($con, "SELECT * FROM user_account WHERE id='$Id'");

if(@mysqli_num_rows($User) > 0){
    while($data = mysqli_fetch_assoc($User)){
        $user_array[0] = $data['id'];
        $user_array[1] = $data['username'];
        $user_array[2] = $data['name'];
        $user_array[3] = $data['email'];
        $user_array[4] = $data['about'];
        $user_array[5] = $data['department'];
        $user_array[6] = $data['locatio'];
        $user_array[7] = $data['statu'];
        $user_array[8] = $data['gender'];
        $user_array[9] = $data['phone'];
    }
}else{
    header("Location: ../login.php");
}