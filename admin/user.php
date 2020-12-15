<?php $errors = [];include("lock.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>My account</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <link href="../assets/css/demo.css" rel="stylesheet">
    <link href="../assets/css/croppie.css" rel="stylesheet">
    <script src="../assets/css/croppie.js"></script>
    <script src="../public/bootstrap/jquery.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
    <script src="../public/js/all.min.js"></script>
    <script src="../public/semantic/semantic.min.js"></script>
    <script src="../public/semantic/themes/default/assets/fonts/brand-icons.eot"></script>

</head>

<body>
    <?php include('../includes/loading.php');?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        454
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="registration.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Registration</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./wedding.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Wedding</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./users.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Members</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./pastors.php">
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
                    <a class="navbar-brand color-hero" href="user.php"> User <i class="fa fa-user"></i></a>
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
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid m-0">
                    <div class="row">
                        <!-- <div class="shadow box-dashboard p-3 col-lg-12">
                            <button class="close shadow btn px-3 py-2">&times;</button>
                            <p>
                                You are the admin of your account, you can delete or edit your account anytime you want.
                                buy choose what you want to edit in order to update it.
                            </p>
                        </div> -->
                    </div>
                    <div class="row p-0">
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard bg-white">
                                <span class="top-icon bg-primary">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                                <h2>Profil image</h2>
                                <?php if($UserData[12] == ''):?>
                                <div class="text-center">
                                    <a href="#editprofile">
                                        <img src="../assets/images/use/user/face-0.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <?php else:?>
                                <img src="../<?php print $UserData[12];?>" alt="" class="img-fluid">
                                <?php endif;?>
                                <p class="d-flex justify-content-between align-items-center mt-2">
                                    <span>
                                        <b>Profile image: </b>
                                    </span>
                                    <span>
                                        <a href="user.php?imgProfile"
                                            class="btn  border-0 p-2 shadow color-hero">
                                                <i class="fa fa-edit"></i>
                                        </a>
                                    </span>
                                </p>
                                <input type="file" style="display: none;" name="upload_image" id="upload_image" />
                                <div id="uploaded_image"></div>
                                <p class="d-flex justify-content-between align-items-center mt-2">
                                    <span>
                                        <b>Name: </b>
                                    </span>
                                    <span>
                                        <?php print $UserData[1];?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editName" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow color-hero">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard bg-white">
                                <span class="top-icon bg-hero">
                                    <i class="fa fa-users fa-2x"></i>
                                </span>
                                <h2>Profil identity</h2>

                                <p class="d-flex justify-content-between align-items-center mt-5">
                                    <span>
                                        <b>Username: </b>
                                    </span>
                                    <span>
                                        <?php print $UserData[2]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editUsername" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow color-hero">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Email: </b>
                                    </span>
                                    <span>
                                        <?php print $UserData[3]; ?>
                                    </span>
                                    <span>
                                        <button class="btn border-0 p-2 shadow color-hero" data-toggle="modal"
                                            data-target="#editEmail">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b> Location</b>
                                    </span>
                                    <span title="<?php print $UserData[5];?>">
                                        <?php print $UserData[5]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editLocation" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow color-hero">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-5">
                                    <span>
                                        <b>Phone: </b>
                                    </span>
                                    <span>
                                        <?php print $UserData[8]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editPhone" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow color-hero"><i
                                                class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard bg-white">
                                <span class="top-icon bg-danger">
                                    <i class="fa fa-gift fa-2x"></i>
                                </span>
                                <h2>Person infos</h2>
                                <p class="d-flex justify-content-between align-items-center mt-5">
                                    <span>
                                        <b>Department</b>
                                    </span>
                                    <span>
                                        <?php print $UserData[9]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editDepartment" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow text-danger"><i
                                                class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Status</b>
                                    </span>
                                    <span>
                                        <?php print $UserData[6]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editStatus" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow text-danger"><i
                                                class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Gender</b>
                                    </span>
                                    <span>
                                        <?php print $UserData[7]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-toggle="modal" data-target="#editGender"
                                            class="btn  border-0 p-2 shadow text-danger"><i
                                                class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-5">
                                    <span>
                                        <b>Date of birth </b>
                                    </span>
                                    <span>
                                        <?php print $UserData[10]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editDob" data-toggle="modal"
                                            class="btn  border-0 p-2 shadow text-danger"><i
                                                class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 mt-4">
                        <div class="col-lg-12 col-md-8 col-sm-12">
                            <div class="shadow box-dashboard">
                                <span class="top-icon bg-pink">
                                    <i class="fa fa-book fa-2x"></i>
                                </span>
                                <div class="text-danger px-5 d-flex justify-content-between align-items-center mt-3">
                                    <span>
                                        <?php print $UserData[13]; ?>
                                    </span>
                                    <span>
                                        <button type="button" data-target="#editAbout" data-toggle="modal"
                                            class="shadow button-bk-o btn-sm text-danger">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAbout">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">About me</h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="about">About me</label>
                            <input type="hidden" value="<?php print $_SESSION['id'];?>" id="id_up" class="form-control">
                            <input type="text" placeholder="Write something...<?php print $UserData[13];?>" id="about"
                                class="form-control" />
                        </div>
                        <div class="form-group col-md-12">
                            <span id="messageError" style="display: none;" class="alert alert-danger"></span>
                            <span id="messageSuccess" style="display: none;" class="alert alert-success"></span>
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editUsername">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Username</h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Username</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <input type="text" id="username" placeholder="Example <?php print $UserData[2];?>"
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editName">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Name</h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Name</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <input type="text" id="name" placeholder="Example <?php print $UserData[1];?>"
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editEmail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Email <i class="fa fa-envelopp"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Email</label>
                            <input type="hidden" value="<?php print $_SESSION['id'];?>" id="id_up" class="form-control">
                            <input type="email" id="email" placeholder="Example <?php print $UserData[3];?>"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <span id="messageError" style="display: none;" class="alert alert-danger"></span>
                            <span id="messageSuccess" style="display: none;" class="alert alert-success"></span>
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editLocation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Location</h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="location">Username</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <input type="text" id="location" placeholder="Example <?php print $UserData[5];?>"
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editPhone">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Phone <i class="fa fa-phone"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <input type="tel" id="phone" placeholder="Example <?php print $UserData[8];?>"
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editDepartment">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Department <i class="fa fa-gift"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="department_up">
                                <option disabled><?php print $UserData[9];?></option>
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editStatus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Status <i class="fa fa-gift"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="status_up">
                                <option disabled>Status: <?php print $UserData[6];?></option>
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editGender">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Gender <i class="fa fa-gift"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
                            <select class="form-control" id="gender">
                                <option disabled>gender: <?php print $UserData[7];?></option>
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editDob">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit Date of birth <i class="fa fa-gift"></i></h4>
                    <a href="user.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input type="hidden" value="<?php print $UserData[0];?>" id="id_up" class="form-control">
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
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="../public/bootstrap/jquery.min.js"></script>
<script src="../public/bootstrap/popper.min.js"></script>
<script src="../public/bootstrap/bootstrap.min.js"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../public/js/all.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js" type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script src="../public/js/myJquery.js"></script>

<script>
    $().ready(() => {
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