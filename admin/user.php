<?php $errors = [];include("lock.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Registration</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <link href="../assets/css/demo.css" rel="stylesheet">
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
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-light p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand color-hero" href="user.php"> User </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid m-0">
                    <div class="row">
                        <div class="shadow box-dashboard p-3 col-lg-12">
                            <button class="close shadow btn px-3 py-2">&times;</button>
                            <p>
                                You are the admin of your account, you can delete or edit your account anytime you want. buy choose what you want to edit in order to update it.
                            </p>
                        </div>
                    </div>
                    <div class="row p-0">
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard">
                                <span class="top-icon bg-primary">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                                <h2>Profil image</h2>
                                <img src="../assets/images/erc/yvan_profile.jpg" alt="" class="img-fluid">
                                <p class="d-flex justify-content-between align-items-center mt-2">
                                    <span>
                                        <b>Name: </b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow color-hero"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard">
                                <span class="top-icon bg-hero">
                                    <i class="fa fa-users fa-2x"></i>
                                </span>
                                <h2>Profil identity</h2>

                                <p class="d-flex justify-content-between align-items-center mt-5">
                                    <span>
                                        <b>Username: </b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow color-hero"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Email: </b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow color-hero"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b> Location</b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow color-hero"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-5">
                                    <span>
                                        <b>Phone: </b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow color-hero"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="shadow box-dashboard">
                                <span class="top-icon bg-danger">
                                    <i class="fa fa-gift fa-2x"></i>
                                </span>
                                <h2>Person infos</h2>
                                <p class="d-flex justify-content-between align-items-center mt-5">
                                    <span>
                                        <b>Department</b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow text-danger"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Status</b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow text-danger"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <b>Gender</b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow text-danger"><i class="fa fa-edit"></i></button>
                                    </span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-5">
                                    <span>
                                        <b>Date of birth </b>
                                    </span>
                                    <span>
                                        Grace el bisimwa
                                    </span>
                                    <span>
                                        <button class="btn  border-0 p-2 shadow text-danger"><i class="fa fa-edit"></i></button>
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
                                    <span>Description of me</span>
                                    <span>
                                        <button class="shadow btn-sm text-danger"><i class="fa fa-edit"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-plugin m-0 p-0">
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
                                <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
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
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                    </div>
                </li>

                <li class="header-title pro-title text-center">Want more components?</li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                    </div>
                </li>

                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">About me</h4>
                    <button type="button" class="btn text-danger close m-1" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="about">About me</label>
                            <input type="hidden" value="<?php print $_SESSION['id'];?>" id="id_up" class="form-control">
                            <textarea name="about" placeholder="Write something..." id="about_up" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <span id="messageError" style="display: none;" class="alert alert-danger"></span>
                            <span id="messageSuccess" style="display: none;" class="alert alert-success"></span>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-sm btn-warning btn-fill about_btn">Update <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="user.php" class="btn btn-sm btn-fill btn-danger" data-dismiss="modal">Close</a>
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

</html>