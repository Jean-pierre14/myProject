<?php include("lock.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ERC/Notifications</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'>
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
    <?php include('../includes/loading.php'); ?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ERC
                    </a>
                </div>

                <ul class="nav">
                    <li class="nav-item">
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
                    <li class="nav-item">
                        <a class="nav-link" href="./pastor.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Pastors</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg bg-light p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand color-hero" href="notifications.php">
                        <?php print $_SESSION['username'];?>/Notification <i class="fas fa-users"
                            aria-hidden="true"></i>
                    </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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

            <div class="content p-0 m-0">
                <div class="container-fluid">
                    <div class="content-not">
                        <div class="header-not d-flex flex-wrap justify-content-between align-items-center">
                            <span class="badge badge-danger">
                                <?php print Date('Y:'.'m:'.'d');?>
                            </span>
                            <span>
                                <a href="#programmes" class="btn btn-primary">Programmes</a>
                            </span>
                            <span>
                                <a href="#request" class="btn btn-primary">Request</a>
                            </span>
                        </div>
                        <div class="body-not">
                            <div id="blog">
                                <div class="bg-danger p-3 shadow m-3">
                                    <p class="display-3 text-white">
                                        Server is switched off
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-not">
                            <form action="" method="post" class="">
                                <input type="hidden" id="user_id" value="<?php print $_SESSION['id'];?>" class="form-control">
                                <input name="message" id="ContextMsg" placeholder="Typing...." class="form-control">
                                <button type="button" id="Add-blog" class="btn btn-warning">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="index.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="user.php">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="registration.php">
                                    Registration
                                </a>
                            </li>
                            <li>
                                <a href="notifications.php">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                            <a href="#">Genuis Team</a>, Put God first
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="../public/bootstrap/jquery.min.js" type="text/javascript"></script>
<script src="../public/bootstrap/popper.min.js" type="text/javascript"></script>
<script src="../public/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../public/js/all.min.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script src="../assets/js/api.js"></script>

</html>