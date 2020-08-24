<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>454</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/light-bootstrap-dashboard.css">
    <link rel="stylesheet" href="../assets/css/demo.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../public/css/style.min.css">
    <script src="../public/js/jquery-3.4.0.min.js"></script>
    <script src="../public/js/jquery-ui.js"></script>
    <script src="../public/js/light-bootstrap-dashboard.js"></script>
    <script src="../public/js/uikit.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap-notify.js"></script>
    <script src="../public/js/Chart.bundle.min.js"></script>
    <script src="../public/js/all.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark p-1">
        <a class="navbar-brand" href="#">ADMINISTRATION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-right">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user-circle"></i> Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Help </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body">
        <div class="sidebar-nav">
            <h4 class="text-center m-0 p-0">
                ERC
            </h4>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius sed expedita deleniti quaerat, facere,
                maxime odit quam deserunt, nobis nostrum ad numquam. Rerum deleniti consequatur non quis, neque libero
                repellat.
            </p>
        </div>
        <div class="main-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quibusdam fugiat rerum doloribus
                voluptas dolore amet, possimus magni eveniet recusandae, velit, distinctio unde officia! Impedit
                exercitationem architecto est ipsum debitis?
            </p>
        </div>
    </div>
    <div class="container-fluid">

    </div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../public/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="../public/js/bootstrap.min.js" type="text/javascript"></script>
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