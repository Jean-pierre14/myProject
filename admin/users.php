<?php
    include("./lock.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Registration</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/all.min.css" />
    <link rel="stylesheet" href="../public/semantic/semantic.min.css" />
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/sass/index.style.min.css" />
    <link rel="stylesheet" href="../public/sass/style.css" />
</head>

<body>
    <?php include('../includes/loading.php'); ?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ERC/GOMA
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Registration</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./wedding.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Wedding</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./users.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Members</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./pastor.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Pastors</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg bg-white p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="users.php"> Members <i class="fa fa-users"></i></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Members <i class="fa fa-users"></i></span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content m-0">
                <div class="container-fluid m-0 p-0">
                    <div class="row">
                        <?php if(isset($_GET['user'])):?>
                        <?php $id_Get = $_GET['user'];?>
                        <div class="col-md-7 col-sm-12">
                            <div class="container-fluid m-0 p-0">
                                <div class="row">

                                    <?php
                                            $getUser = '';
                                            $ArrGet = [];
                                    
                                            $sql = mysqli_query($con, "SELECT * FROM user_account WHERE id = '$id_Get'");
                                            while($row = mysqli_fetch_assoc($sql)){
                                                $thisArr = [];
                                                $thisArr[0] = $row['id'];
                                                $thisArr[1] = $row['name'];
                                                $thisArr[2] = $row['username'];
                                                $thisArr[3] = $row['email'];
                                                $thisArr[4] = $row['pass'];
                                                $thisArr[5] = $row['locatio'];
                                                $thisArr[6] = $row['statu'];
                                                $thisArr[7] = $row['gender'];
                                                $thisArr[8] = $row['phone'];
                                                $thisArr[9] = $row['department'];
                                                $thisArr[10] = $row['dob'];
                                                $thisArr[11] = $row['create_at'];
                                                $thisArr[12] = $row['profile_pic'];
                                                $thisArr[13] = $row['about'];
                                                
                                                $getUser .= '
                                                <div class="col-md-12 col-sm-12 mb-3 d-flex justify-content-between align-items-center col-lg-12 bg-white">
                                                    
                                                    <h3 class="text-left text-uppercase text-primary">
                                                        '.$row['username'].'
                                                    </h3>
                                                    <a href="users.php" class="border-0 btn btn-sm shadow">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="shadow box-dashboard bg-white">
                                                        <span class="top-icon bg-primary">
                                                            <i class="fa fa-user fa-2x"></i>
                                                        </span>';
                                                        if( $row['profile_pic']== ''){
                                                        $getUser .='
                                                        <div class="text-center">
                                                            <a href="#editprofile">
                                                                <img src="../assets/images/use/user/face-0.jpg" alt="" class="img-fluid">
                                                            </a>
                                                        </div>';

                                                        }else{
                                                            $getUser .= '
                                                            <img src="../'.$row['profile_pic'].'" alt="" class="img-fluid">';
                                                        }
                                                        $getUser .= '
                                                        
                                                    </div>
                                                    <div class="shadow box-dashboard mt-4 bg-white">
                                                        <div class="top-icon bg-pink">
                                                            <i class="fa fa-home fa-2x"></i>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>Location: </b>
                                                                </span>
                                                                <span style="font-size: 14px;" class="text-right">
                                                                    '.$row['locatio'].'
                                                                </span>
                                                            </p>
                                                            <button type="button" data-target="#editLocation" data-toggle="modal"
                                                                class="btn  border-0 p-2 shadow color-hero">
                                                                <i class="fa fa-edit"></i>
                                                                Edit
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="shadow box-dashboard mt-4 bg-white">
                                                        <div class="top-icon bg-danger">
                                                            <i class="fa fa-gift fa-2x"></i>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p>
                                                                <b>Description</b>
                                                            </p>
                                                            <p class="text-center">
                                                                '.$row['about'].'
                                                            </p>
                                                            <button type="button" data-toggle="modal" data-target="#editAbout" class="btn btn-sm btn-block btn-fill btn-danger">
                                                                <i class="fa fa-edit"></i>
                                                                edit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="shadow box-dashboard bg-white">
                                                        <span class="top-icon bg-hero">
                                                            <i class="fa fa-gift fa-2x"></i>
                                                        </span>
                                                        <div class="mt-4">
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>Name: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['name'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editName" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>Username: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['username'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editUsername" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>email: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['email'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editEmail" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>phone: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['phone'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editPhone" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>department: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['department'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editDepartment" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>Gender: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['gender'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editGender" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>Status: </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['statu'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editStatus" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                            <p class="d-flex justify-content-between align-items-center mt-2">
                                                                <span>
                                                                    <b>
                                                                        <small>Date of birth:</small>
                                                                    </b>
                                                                </span>
                                                                <span class="text-right">
                                                                    '.$row['dob'].'
                                                                </span>
                                                                <span>
                                                                    <button type="button" data-target="#editDob" data-toggle="modal"
                                                                        class="btn  border-0 p-2 shadow color-hero">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                ';
                                            }
                                            print $getUser;
                                        ?>
                                </div>
                            </div>

                        </div>
                        <?php else:?>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="container-fluid m-0 p-0">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 p-2">
                                        <div class="box-dashboard bg-white shadow">
                                            <p class="d-flex justify-content-between align-items-center">
                                                <span>
                                                    <b>Single</b>
                                                </span>
                                                <span>
                                                    3444
                                                </span>
                                            </p>
                                            <span class="icon-left-center bg-hero">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 p-2">
                                        <div class="box-dashboard bg-white shadow">
                                            <p class="d-flex justify-content-between align-items-center">
                                                <span>
                                                    <b>Fiance</b>
                                                </span>
                                                <span>
                                                    20
                                                </span>
                                            </p>
                                            <span class="icon-left-center bg-warning text-light">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 p-2">
                                        <div class="box-dashboard bg-white shadow">
                                            <p class="d-flex justify-content-between align-items-center">
                                                <span>
                                                    <b>Divorce</b>
                                                </span>
                                                <span>
                                                    20
                                                </span>
                                            </p>
                                            <span class="icon-left-center bg-danger text-light">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 p-2">
                                        <div class="box-dashboard bg-white shadow">
                                            <p class="d-flex justify-content-between align-items-center">
                                                <span>
                                                    <b>Male</b>
                                                </span>
                                                <span>
                                                    20
                                                </span>
                                            </p>
                                            <span class="icon-left-center bg-warning text-light">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 p-2">
                                        <div class="box-dashboard bg-white shadow">
                                            <p class="d-flex justify-content-between align-items-center">
                                                <span>
                                                    <b>Female</b>
                                                </span>
                                                <span>
                                                    20
                                                </span>
                                            </p>
                                            <span class="icon-left-center bg-pink text-light">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 p-2">
                                        <img src="../assets/images/share-img.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <form action="" method="post">
                                <div class="form-inline">
                                    <input type="search" name="search" id="search" class="form-control"
                                        placeholder="Search....">
                                    <button type="submit" class="btn btn-fill btn-success">Search</button>
                                </div>
                            </form>
                            <div id="usersDisplay">
                                <?php include("../includes/members.php");?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <?php print Date('Y'); ?>
                            <a href="#">
                                <?php print $team; ?>
                            </a>,
                            <?php print $devise; ?>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="editUsername">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit <?php print $thisArr[2]?></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Username</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" id="username" placeholder="Example <?php print $thisArr[2];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Username"
                                class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Username
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editName">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit <?php print $thisArr[1]?></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Name</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" id="name" placeholder="Example <?php print $thisArr[1];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Name" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update name
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editAbout">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">About me</h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="about">About me</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" placeholder="Write something...<?php print $thisArr[13];?>" id="about"
                                class="form-control" />
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-sm btn-warning btn-fill" id="btn-Edit-About">
                                Update
                                <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editName">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Name</h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Name</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" id="name" placeholder="Example <?php print $thisArr[1];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Name" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update name
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editEmail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Email <i class="fa fa-envelopp"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Email</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="email" id="email" placeholder="Example <?php print $thisArr[3];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Email" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update email
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editLocation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Location</h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="location">Username</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" id="location" placeholder="Example <?php print $thisArr[5];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Location"
                                class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Location
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editPhone">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Phone <i class="fa fa-phone"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="tel" id="phone" placeholder="Example <?php print $thisArr[8];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Phone" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Phone
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editDepartment">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Department <i class="fa fa-gift"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="department_up">
                                <option disabled><?php print $thisArr[9];?></option>
                                <?php 
                                    $selectDepartment = mysqli_query($con, "SELECT * FROM department_tb");
                                    while($dS = mysqli_fetch_assoc($selectDepartment)){
                                        ?>
                                <option value="<?php print $dS['name'];?>">
                                    <?php print $dS['name'];?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Department"
                                class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Department
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editStatus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Status <i class="fa fa-gift"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="status_up">
                                <option disabled>Status: <?php print $thisArr[6];?></option>
                                <?php 
                                    $selectDepartment = mysqli_query($con, "SELECT * FROM status_tb");
                                    while($dS = mysqli_fetch_assoc($selectDepartment)){
                                        ?>
                                <option value="<?php print $dS['name'];?>">
                                    <?php print $dS['name'];?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Status"
                                class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Status
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editGender">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Gender <i class="fa fa-gift"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="gender">
                                <option disabled>gender: <?php print $thisArr[7];?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Gender"
                                class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Gender
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editDob">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Date of birth <i class="fa fa-gift"></i></h4>
                    <a href="users.php?user=<?php print $thisArr[0];?>"
                        class="btn btn-sm border-0 shadow text-danger close m-1" style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="date" id="dob" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Dob" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Date of birth
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="users.php?user=<?php print $thisArr[0];?>" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
</body>

<script src="../public/bootstrap/jquery.min.js"></script>
<script src="../public/bootstrap/popper.min.js"></script>
<script src="../public/bootstrap/bootstrap.min.js"></script>
<script src="../public/js/all.min.js"></script>
<script src="../public/semantic/semantic.min.js"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js" type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script src="../public/js/myJquery.js"></script>

<script>
$(document).ready(function() {
    let flag = 0;
    $.ajax({
        url: './config.php',
        data: {
            action: 'usersList',
            limit: 9,
            offset: 0
        },
        method: 'post',
        success: function(data) {
            $('#usersDisplay').html(data)
            flag += 3;
        }
    });
    $('#btn-Edit-Username').click(function() {
        let action = 'editUsername';
        const id = $('#id_up').val();
        let username = $('#username').val();
        if (username.lenght <= 4 || username === undefined || username === '') {
            alert('Username is empty and should have at least 4 caracters');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action: action,
                    id: id,
                    username: username
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#username').val('');
        }
    });
    $('#btn-Edit-Email').click(function() {
        const action = 'editEmail';
        const id = $('#id_up').val();
        const email = $('#email').val();
        if (email.lenght <= 2 || email === undefined || email === '') {
            alert('Email is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action: action,
                    id: id,
                    email: email
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#email').val('');
        }
    });
    $('#btn-Edit-Name').click(function() {
        const action = 'editName';
        const id = $('#id_up').val();
        const name = $('#name').val();
        if (name.lenght < 4 || name === undefined || name === '') {
            alert('name is empty and it shouds have at least 4 caracters');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    name
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#name').val('');
        }
    });
    $('#btn-Edit-Location').click(function() {
        const action = 'editLocation';
        const id = $('#id_up').val();
        const location = $('#location').val();
        if (location.lenght < 4 || location === undefined || location === '') {
            alert('Location is empty and it shouds have at least 4 caracters');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    location: location
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#location').val('');
        }
    });
    $('#btn-Edit-Status').click(function() {
        const action = 'editStatus';
        const id = $('#id_up').val();
        const status = $('#status_up').val();
        if (status === '') {
            alert('status is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    status
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#status').val('');
        }
    });
    $('#btn-Edit-Gender').click(function() {
        const action = 'editGender';
        const id = $('#id_up').val();
        const gender = $('#gender').val();
        if (gender === '') {
            alert('gender is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    gender
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#gender').val('');
        }
    });
    $('#btn-Edit-Phone').click(function() {
        const action = 'editPhone';
        const id = $('#id_up').val();
        const phone = $('#phone').val();
        if (phone.lenght < 4 || phone === undefined || phone === '') {
            alert('phone is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    phone
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#phone').val('');
        }
    });
    $('#btn-Edit-Department').click(function() {
        const action = 'editDepartment';
        const id = $('#id_up').val();
        const department = $('#department_up').val();
        if (department === '') {
            alert('department is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    department: department
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#department').val('');
        }
    });
    $('#btn-Edit-Dob').click(function() {
        const action = 'editDob';
        const id = $('#id_up').val();
        const dob = $('#dob').val();
        if (dob.lenght < 6 || dob === undefined || dob === '') {
            alert('Date  of birth is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    dob
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#dob').val('');
        }
    });
    $('#btn-Edit-About').click(function() {
        const action = 'editAbout';
        const id = $('#id_up').val();
        let about = $('#about').val();
        if (about.lenght < 4 || about === undefined || about === '') {
            alert('Description is empty');
        } else {
            $.ajax({
                url: './config.php',
                method: 'post',
                data: {
                    action,
                    id,
                    about
                },
                success: function(data) {
                    alert(data)
                }
            })
            $('#about').val('');
        }
    });
});
</script>


</html>