<?php
include("./config/db.php");
session_start();
$id = $_SESSION['id'];
$sql = "UPDATE user_account SET on_off = 'offline' WHERE id = '$id'";
$result = mysqli_query($con, $sql);

if($result){
    print "offline";
    session_destroy();
}else{
    print " online " . $_SESSION['id'];
}