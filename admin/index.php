<?php include("lock.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ERC/
        <?php print $_SESSION['username'];?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/light-bootstrap-dashboard.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../public/css/demo.css">
    <link rel="stylesheet" href="../public/css/style.min.css">
    <link href="../public/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
</head>

<body>
    <?php include('../includes/loading.php');?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ERC
                    </a>
                </div>

                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
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
            <nav class="navbar navbar-expand-lg bg-light p-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand color-hero" href="index.php"> Dashboard <i class="fas fa-home" aria-hidden="true"></i></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link color-hero" data-toggle="dropdown">
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
                <div class="container-fluid p-0">
                    <div class="main-content">
                        <nav class="show-lg">
                            <span>
                                <img src="../assets/images/gun.png" alt="">
                            </span>
                            <ul>
                                <li><a href="#" class="bg-primary">Members</a></li>
                                <li><a href="#" class="bg-hero">Pastors</a></li>
                                <li><a href="#" class="bg-pink">Weddings</a></li>
                            </ul>
                        </nav>
                        <div class="dashboard">
                            <div class="row p-0 mt-3">
                                <div class="col-md-4">
                                    <div class="shadow box-dashboard">
                                        <p class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <b>Total of all Users</b>
                                            </span>
                                            <span>
                                                <small>3000</small>
                                            </span>
                                        </p>
                                        <a href="#" class="btn btn-sm bg-primary">View more</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="shadow box-dashboard">
                                        <p class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <b>Pastors</b>
                                            </span>
                                            <span>
                                                23
                                            </span>
                                        </p>
                                        <a href="#" class="btn btn-sm bg-hero">View more</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="shadow box-dashboard">
                                        <p class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <b>Weddings</b>
                                            </span>
                                            <span>
                                                200
                                            </span>
                                        </p>
                                        <a href="#" class="btn btn-sm bg-pink">View more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    <div class="shadow box-dashboard">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="color-hero">Pastors</h2>
                                            <a href="#" class="btn shadow"><i class="fa fa-arrow-right color-hero"></i></a>
                                        </div>
                                        <table class="table table-sm table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Full name</th>
                                                    <th>E-mail</th>
                                                    <th>Phone</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hadassa</td>
                                                    <td>Goma avenu des volcans</td>
                                                    <td>09999999999</td>
                                                    <td>
                                                        <div class="btn-group delete">
                                                            <a href="#edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                            <a href="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hadassa</td>
                                                    <td>Goma avenu des volcans</td>
                                                    <td>09999999999</td>
                                                    <td>
                                                        <div class="btn-group delete">
                                                            <a href="#edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                            <a href="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hadassa</td>
                                                    <td>Goma avenu des volcans</td>
                                                    <td>09999999999</td>
                                                    <td>
                                                        <div class="btn-group delete">
                                                            <a href="#edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                            <a href="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hadassa</td>
                                                    <td>Goma avenu des volcans</td>
                                                    <td>09999999999</td>
                                                    <td>
                                                        <div class="btn-group delete">
                                                            <a href="#edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                            <a href="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hadassa</td>
                                                    <td>Goma avenu des volcans</td>
                                                    <td>09999999999</td>
                                                    <td>
                                                        <div class="btn-group delete">
                                                            <a href="#edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                            <a href="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="shadow box-dashboard">
                                        <h2 class="color-hero">3 Last users</h2>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username 
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="#">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="nc-icon nc-align-center fa-2x" style="color: #fff;font-size: 20px;padding:10px;font-weight: 700;"></i>
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
                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i
                            class="fa fa-twitter"></i> · sniper</button>
                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i
                            class="fa fa-facebook-square"></i> Racine14</button>
                </li>
            </ul>
        </div>
    </div>
</body>
<script src="../public/bootstrap/jquery.min.js" type="text/javascript"></script>
<script src="../public/bootstrap/popper.min.js" type="text/javascript"></script>
<script src="../public/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../public/js/all.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(() => {
        demo.initDashboardPageCharts();
        demo.showNotification();
    });
</script>

</html>