<?php $errors = [];include("lock.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Registration</title>
    <link rel="shortcut icon" href="../assets/images/erc/favicon.png" type="image/png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="./includes/imageUpload/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/style.min.css">
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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
            <nav class="navbar navbar-expand-lg bg-white navbar-fixed-top p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="registration.php"> Registration <i class="fa fa-user-plus"></i></a>
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
            <div class="content m-0 p-0">
                <div class="container-fluid">
                    <?php if (isset($_GET['registration'])) : ?>
                    <?php if ($_GET['registration'] == 'pastor') : ?>
                    <ul class="nav nav-tabs nav-justified m-0">
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="?registration=pastor">Pastor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?registration=wedding">Wedding</a>
                        </li>
                    </ul>
                    <div class="container-fluid p-0 m-0">
                        <div class="row bg-white">
                            <div class="col-md-6 p-2">
                                <div class="height">
                                    <div id="Pastors">
                                        <!-- Fetch using javascript -->
                                        <!-- Fetch using javascript -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" data-toggle="modal" data-target="#myModal"
                                    class="btn btn-sm btn-warning btn-fill">Add new
                                    Pastor</button>
                                <img src="../assets/images/erc/logo.png" alt="LogoERC" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <?php elseif ($_GET['registration'] == 'wedding') : ?>
                    <ul class="nav nav-tabs nav-justified m-0">
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?registration=pastor">Pastor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="?registration=wedding">Wedding</a>
                        </li>
                    </ul>
                    <div class="container-fluid m-0 bg-white" style="min-height: 80vh;">
                        <a href="wedding.php" class="my-3 btn btn-fill btn-sm btn-info">view the list</a>
                        <div class="row justify-content-center">
                            <div class="col-md-8 p-1">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div id="error"></div>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="husband">Husband</label>
                                                <select name="husband" id="husband" class=" form-control">
                                                    <option value="">Husband</option>
                                                    <?php
                                                        $sqlHusband = mysqli_query($con, "SELECT * FROM user_account WHERE (gender = 'Male' AND statu != 'married')");
                                                        if(mysqli_num_rows($sqlHusband) > 0){
                                                            while($dH = mysqli_fetch_assoc($sqlHusband)){
                                                                $output .= '
                                                                    <option value="'.$dH['id'].'" title="'.$dH['email'].'">'.$dH['name'].'</option>
                                                                ';
                                                            }
                                                        }else{
                                                            $output .= '
                                                            <option value="" class="bg-danger"></option>';
                                                        }
                                                        print $output;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="wife">wife</label>
                                                <select name="wife" id="wife" class=" form-control">
                                                    <option value="">Wife</option>
                                                    <?php
                                                        $sqlWife = mysqli_query($con, "SELECT * FROM user_account WHERE (gender = 'Female' AND statu != 'married') ORDER BY `name`");
                                                        if(mysqli_num_rows($sqlWife) > 0){
                                                            while($dW = mysqli_fetch_assoc($sqlWife)){
                                                                $outWife .= '
                                                                    <option value="'.$dW['id'].'" title="'.$dW['email'].'">'.$dW['name'].'</option>
                                                                ';
                                                            }
                                                        }else{
                                                            $outWife .= '
                                                            <option value="" class="bg-danger"></option>';
                                                        }
                                                        print $outWife;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pastor">Pastor</label>
                                                <select name="pastor" id="pastor" class=" form-control">
                                                    <option value="">Pastor Name</option>
                                                    <?php
                                                        $sqlP = mysqli_query($con, "SELECT * FROM pastor_tb");
                                                        if(mysqli_num_rows($sqlP) > 0){
                                                            while($dP = mysqli_fetch_assoc($sqlP)){
                                                                $outP .= '
                                                                    <option value="'.$dP['pastor_name'].'">'.$dP['pastor_name'].'</option>
                                                                ';
                                                            }
                                                        }else{
                                                            $outP .= '
                                                            <option value="" class="bg-danger"></option>';
                                                        }
                                                        print $outP;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="about">Status</label>
                                                    <input type="text" id="about" placeholder="Status of the wedding"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="date">Date</label>
                                                    <input type="date" id="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-fill btn-sm btn-warning"
                                                    id="btn-record-wedding">
                                                    Register
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-7 p-1">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card mt-1">
                                            <div class="card-header p-1">
                                                <form action="" method="post" class="form-inline">
                                                    <input type="text" id="wedding_search" placeholder="Search..."
                                                        class="form-control">
                                                    <button class="btn btn-warning btn-fill" type="submit"
                                                        name="search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                <div id="wedding_list">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php else : ?>
                    <ul class="nav nav-tabs nav-justified m-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="registration.php">New Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?registration=pastor">Pastor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?registration=wedding">Wedding</a>
                        </li>
                    </ul>
                    <div class="row pt-2 bg-white">
                        <div class="col-md-3">
                            <form action="" autocomplete="off" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="search_txt" name="search"
                                        placeholder="Your Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Search</span>
                                    </div>
                                </div>
                            </form>

                            <div class="height" style="overflow-y: auto; height: 450px">
                                <div id="searchResult">
                                    <!-- Ajax -->
                                </div>
                                <div id="member-list">
                                    <!-- Ajax -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="container-fluid m-0 p-0">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php if (isset($_GET['member'])) : ?>
                                        <?php
                                                $IdMember = $_GET['member'];
                                                $MemberGet = mysqli_query($con, "SELECT * FROM user_account WHERE id = '$IdMember' ");
                                                $memberArray = [];
                                                while ($rowM = mysqli_fetch_array($MemberGet)) {
                                                    $memberArray[0] = $rowM['username'];
                                                    $memberArray[1] = $rowM['name'];
                                                    $memberArray[2] = $rowM['email'];
                                                    $memberArray[3] = $rowM['pass'];
                                                    $memberArray[4] = $rowM['profile_pic'];
                                                    $memberArray[5] = $rowM['phone'];
                                                    $memberArray[6] = $rowM['about'];
                                                    $memberArray[7] = $rowM['department'];
                                                    $memberArray[8] = $rowM['gender'];
                                                    $memberArray[9] = $rowM['statu'];
                                                    $memberArray[10] = $rowM['locatio'];
                                                    $memberArray[11] = $rowM['dob'];
                                                    $memberArray[12] = $rowM['id'];
                                                }
                                                ?>
                                        <div class="container-fluid m-0 p-0">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="card shadow-sm">
                                                        <a href="#lightbox">
                                                            <img src="../<?php print $memberArray[4]; ?>" alt=""
                                                                class="card-img-top img-overflow">
                                                        </a>
                                                        <div class="card-body">
                                                            <p
                                                                class="d-flex flex-wrap justify-content-between align-items-center">
                                                                <span>
                                                                    Name:
                                                                </span>
                                                                <span>
                                                                    <?php print $memberArray[1];?>
                                                                </span>
                                                            </p>
                                                            <p
                                                                class="d-flex flex-wrap justify-content-between align-items-center">
                                                                <span>
                                                                    Username:
                                                                </span>
                                                                <span>
                                                                    <?php print $memberArray[0];?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($memberArray[9] == 'single') : ?>
                                            <div class="container-fluid m-0 p-0">
                                                <p class="ui message positive">
                                                    It's not bad to staying alone, but thing how to get someone
                                                </p>
                                            </div>
                                            <?php elseif ($memberArray[9] == 'fiance') : ?>
                                            <div class="container-fluid m-0 p-0">
                                                <p class="ui message positive d-flex justify-content-between">
                                                    We are waiting for you to show us you belove
                                                    <span>
                                                        <img src="../assets/images/loading.gif" alt="Loading..."
                                                            class="ui mini avatar"
                                                            style="width: 20px;height: 20px"></span>
                                                </p>
                                            </div>
                                            <?php elseif ($memberArray[9] == 'married') : ?>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <?php
                                                                if ($memberArray[8] == 'Male') {
                                                                    $myWedding = mysqli_query($con, "SELECT * FROM wedding_tb WHERE husband_id = '" . $memberArray[12] . "'");
                                                                } else {
                                                                    $myWedding = mysqli_query($con, "SELECT * FROM wedding_tb WHERE wife_id = '" . $memberArray[12] . "'");
                                                                }
                                                                ?>
                                                    <?php if (@mysqli_num_rows($myWedding) > 0) : ?>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header p-1">
                                                                <?php if ($memberArray[8] == 'Male') : ?>
                                                                <p class="text-primary">His wife info</p>
                                                                <?php else : ?>
                                                                <p class="text-info">Her Husband info</p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                    <?php else : ?>
                                                    <div class="col-md-12 p-0">
                                                        <div class="card">
                                                            <div class="card-header p-1">
                                                                <p class="text-danger">Record wedding</p>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <select name="patner" id="patener"
                                                                                class="custom-select">
                                                                                <?php if ($memberArray[8] == 'Male') : ?>
                                                                                <option value=""> -- Choose a wife --
                                                                                </option>
                                                                                <?php
                                                                                                    $selectPatner = mysqli_query($con, "SELECT * FROM user_account WHERE gender LIKE 'female' AND statu = 'fiance'");
                                                                                                    ?>
                                                                                <?php else : ?>
                                                                                <option value=""> -- Choose a Husband --
                                                                                </option>
                                                                                <?php
                                                                                                    $selectPatner = mysqli_query($con, "SELECT * FROM user_account WHERE gender LIKE 'male' AND statu = 'fiance'");
                                                                                                    ?>
                                                                                <?php endif; ?>
                                                                                <?php if (@mysqli_num_rows($selectPatner) > 0) : ?>
                                                                                <?php while ($rowPatner = mysqli_fetch_array($selectPatner)) : ?>
                                                                                <option
                                                                                    value="<?php print $rowPatner['id']; ?>">
                                                                                    <?php print $rowPatner['name']; ?>
                                                                                </option>
                                                                                <?php endwhile; ?>
                                                                                <?php else : ?>
                                                                                <option value="" class="text-danger">
                                                                                    There no Data</option>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <select name="patner" id="patener"
                                                                                class="custom-select">
                                                                                <option value="">-- Pastor --</option>
                                                                                <?php
                                                                                                $SelectPastor = mysqli_query($con, "SELECT * FROM pastor_tb");
                                                                                                if (@mysqli_num_rows($SelectPastor) > 0) {
                                                                                                    while ($rowPastor = mysqli_fetch_array($SelectPastor)) {
                                                                                                        print '<option value="' . $rowPastor['name'] . '">' . $rowPastor['name'] . '</option>';
                                                                                                    }
                                                                                                } else {
                                                                                                    print '<option class="text-center text-danger">There no Pastor</option>';
                                                                                                }
                                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="input-group mb-3">
                                                                                <input type="date" class="form-control"
                                                                                    placeholder="Your Email">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">Date
                                                                                        of the wedding</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit"
                                                                            class="btn btn-fill btn-success btn-md">Record
                                                                            now <i
                                                                                class="fa fa-arrow-circle-right"></i></button>
                                                                    </div>
                                                                </form>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php elseif ($memberArray[9] == 'divorce') : ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php else : ?>
                                        <?php require_once("../event/event.min.php");
                                                include("../error.php"); ?>
                                        <form action="" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Username</span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            value="<?php print $username; ?>" name="username"
                                                            id="username" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <input type="text" name="name" id="name"
                                                            value="<?php print $name; ?>" class="form-control"
                                                            placeholder="Name">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Name</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Email</span>
                                                        </div>
                                                        <input type="email" name="email" id="email"
                                                            value="<?php print $email; ?>" class="form-control"
                                                            placeholder="Email@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-7">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Location</span>
                                                        </div>
                                                        <input type="text" value="<?php print $location; ?>"
                                                            name="location" placeholder="Location" id="location"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <select name="depart" id="department"
                                                        class="custom-select text-center">
                                                        <option value="">-- Department --</option>
                                                        <?php
                                                                $out = '';
                                                                include("./config/db.php");
                                                                $status = mysqli_query($con, "SELECT * FROM department_tb");
                                                                while ($rowStatus = mysqli_fetch_array($status)) {
                                                                    $out .= '<option value="' . $rowStatus['name'] . '">' . $rowStatus['name'] . '</option>';
                                                                }
                                                                print $out;
                                                                ?>
                                                    </select>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="status" id="status" class="custom-select text-center">
                                                        <option value="">-- Status --</option>
                                                        <?php
                                                                $status = mysqli_query($con, "SELECT * FROM status_tb");
                                                                while ($rowStatus = mysqli_fetch_array($status)) {
                                                                    $output .= '<option value="' . $rowStatus['name'] . '">' . $rowStatus['name'] . '</option>';
                                                                }
                                                                print $output;
                                                                ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="gender" id="gender" class="custom-select text-center">
                                                        <option value="">-- Gender --</option>
                                                        <option value="Male" class="text-danger">Male</option>
                                                        <option value="Female" class="text-success">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Date of Birth</span>
                                                        </div>
                                                        <input type="date" name="dob" id="dob"
                                                            value="<?php print $dob; ?>" placeholder="Date of birth"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input-group mb-3 input-group-md">
                                                        <input type="tel" name="phone" id="phone"
                                                            value="<?php print $phones; ?>" placeholder="phone numbers"
                                                            class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Phone</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <textarea name="about" disabled value="Status" rows="3"
                                                        placeholder="About user" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button class="btn btn-md btn-success" name="new-user"
                                                        type="submit">Register <i
                                                            class="fa fa-arrow-circle-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="online">
                                            <!-- Ajax -->
                                        </div>
                                        <div id="member" class="mt-2">
                                            <!-- Ajax -->
                                        </div>
                                        <div id="statistic" class="mt-2">
                                            <!-- Ajax -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
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
                            <?php print Date('Y');?>
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

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>

            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Style</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Background Image</p>
                        <label class="switch">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary"
                                data-off-color="primary"><span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Filters</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>

                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="..//assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-5.jpg" alt="" />
                    </a>
                </li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank"
                            class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                    </div>
                </li>

                <li class="header-title pro-title text-center">Want more components?</li>

                <li class="button-container">
                    <div class="">
                        <a href="#" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                    </div>
                </li>

                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i
                            class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i
                            class="fa fa-facebook-square"></i> · 426</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-success">Add New Pastor</h4>
                    <button type="button" class="btn close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="successMsg"></div>
                    <form action="" method="post">
                        <div class="form-group">
                            <select name="pastorId" id="pastorId" class="custom-select">
                                <option value="">-- Select Pastor ---</option>
                                <?php
                                $item = '';
                                $recordPastor = mysqli_query($con, "SELECT * FROM user_account WHERE (statu = 'married' OR statu = 'divorce')");
                                if (@mysqli_num_rows($recordPastor) > 0) {
                                    while ($rowrecord = mysqli_fetch_array($recordPastor)) {
                                        $pastorId = $rowrecord['id'];
                                        $pastorname = $rowrecord['name'];
                                        print '<option value="' . $pastorId . '">' . $pastorname . '</option>';
                                    }
                                } else {
                                    $item .= '<option class="text-danger">There no data</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="pastorName" placeholder="Your Pastor">
                                <div class="input-group-append">
                                    <span class="input-group-text">Pastor name</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-fill btn-sm btn-success RecordPastor">Record <i
                                    class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
    online();
    member();
    memberList();
    statistic();
    listPastor();
    PastorNormal();

    $(document).on('click', '.show-case', function() {
        let id = $(this).data('id');
        $('.display-' + id).toggle('slow');
    });
    $(document).on('click', '#btn-record-wedding', function() {
        let husband = $('#husband').val();
        let wife = $('#wife').val();
        let pastor = $('#pastor').val();
        let about = $('#about').val();
        let date = $('#date').val();
        let action = 'weddingRecord';

        if (husband === '' || wife === '' || pastor === '') {
            // alert('Please fill all fields');
            document.getElementById('error').innerHTML =
                '<p class="alert alert-danger">Please fill all fields</p>'
        } else {
            $.ajax({
                url: './config.php',
                data: {
                    action,
                    about,
                    date,
                    husband,
                    wife,
                    pastor
                },
                method: 'post',
                success: function(data) {
                    alert(data);
                    weddings();
                    document.getElementById('error').innerHTML = ''
                }
            });
        }
    });
    $(document).on("click", ".RecordPastor", function() {
        let action = 'RecordPastor';
        let pastorId = $('#pastorId').val();
        let pastorName = $('#pastorName').val();

        $.ajax({
            url: '../event/event.php',
            method: 'post',
            data: {
                action: action,
                pastorId: pastorId,
                pastorName: pastorName
            },
            success: function(data) {
                if (data = 'success') {
                    $('#successMsg').html(
                        '<p class="ui message positive">Registration success!</p>');
                } else {
                    $('#successMsg').html(
                        '<p class="ui message negative">Failed! Check these not an empty field</p>'
                    );
                }
            }
        })
    });
    $('#search_txt').keyup(function() {
        let action = 'search';
        let txt = $(this).val();

        if (txt != '') {
            $.ajax({
                url: '../event/event.php',
                method: 'post',
                data: {
                    action: action,
                    txt: txt
                },
                dataType: 'text',
                success: function(data) {
                    $('#member-list').hide(300);
                    $('#searchResult').html(data);
                }
            });
        } else {
            $('#searchResult').html('');
            $('#member-list').show(300);
        }
    });
    $('#search_txt2').keyup(function() {
        let action = 'search2';
        let txt = $(this).val();

        if (txt != '') {
            $.ajax({
                url: '../event/event.php',
                method: 'post',
                data: {
                    action: action,
                    txt: txt
                },
                dataType: 'text',
                success: function(data) {
                    $('#PastorNormal').hide(300);
                    $('#selectPastor').html(data);
                }
            });
        } else {
            $('#selectPastor').html('');
            $('#PastorNormal').show(300);
        }
    });
    weddings();
});

function weddings() {
    let action = 'weddings';
    let limit = 10;
    let offset = 0;
    $.ajax({
        url: './config.php',
        data: {
            action,
            limit,
            offset
        },
        method: 'post',
        success: function(data) {
            $('#wedding_list').html(data)
        }
    })
}


function PastorNormal() {
    let action = 'PastorNormal';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#PastorNormal').html(data)
        }
    })
}

function listPastor() {
    let action = 'listPastor';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#listPastor').html(data);
        }
    })
}

function online() {
    let action = 'online';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#online').html(data)
        }
    })
}

function member() {
    let action = 'member';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#member').html(data)
        }
    })
}

function memberList() {
    let action = 'member-list';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#member-list').html(data)
        }
    })
}

function statistic() {
    let action = 'statistic';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#statistic').html(data)
        }
    })
}
</script>



<!-- FETCH javascript -->
<script>
let OutPut = ''
fetch('http://localhost:7000/pastors')
    .then(res => res.json().then(data => {
        if (data.length > 0) {
            data.forEach(item => {
                OutPut += `    
                    <div class="box-p shadow-sm my-1">
                            <span>${item.pastor_name}</span>
                            <img class="avatar" src="../${item.profile_pic}">
                    </div>
                    `
            })
            document.getElementById('Pastors').innerHTML = OutPut
        } else {
            document.getElementById('Pastors').innerHTML = '<p>There is no Pastor registered</p>'
        }
    }))
    .catch(err => console.log(err))
</script>
<!-- FETCH javascript -->

</html>