<?php
    session_start();
    if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){
        header('location: ../login.php');
        exit();
    }

    require_once("./includes/config.php");
    