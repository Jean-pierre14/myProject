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
    <link href="../assets/css/demo.css" rel="stylesheet">
    <script src="../public/bootstrap/jquery.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
    <script src="../public/js/all.min.js"></script>
    <script src="../public/semantic/semantic.min.js"></script>
    <script src="../public/semantic/themes/default/assets/fonts/brand-icons.eot"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
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
                    <a class="navbar-brand" href="user.php"> User </a>
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
            <!-- End Navbar -->
            <div class="content m-0">
                <?php if( isset($_GET['setting']) ):?>
                    <?php if($_GET['setting'] == 'username'):?>
                        <div class="container-fluid m-0 p-0">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                  <a class="nav-link" href="?setting"><i class="fa fa-cogs"></i> Settings</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" href="?setting=username"><i class="fa fa-user-circle"></i> Username</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="user.php"><i class="fa fa-user"></i> Back</a>
                                </li>
                            </ul>
                            <div class="row justify-content-center bg-white">
                                <div class="col-md-6 mb-5">
                                    <h3><i class="fa fa-cog"></i> Welcome dear <span class="text-uppercase"><?php print $_SESSION['name'];?></span></h3>
                                    <p>
                                        within this part you allow to change all about, but you can't have the some email, username with another
                                        person in this system, it's our requirement, make your strong username, it means capitales lettres, numbers
                                        and many things you want to make you more protect! thank you to your read
                                    </p>
                                </div>
                            </div>
                            <div class="row bg-white p-2">
                                <div class="col-md-4">
                                    <?php
                                        $setting = '';
                                        $selectSetting  = mysqli_query($con, "SELECT * FROM user_account WHERE id = '".$_SESSION['id']."'");
                                        while($rowSetting = mysqli_fetch_array($selectSetting)){
                                    ?>
                                    <div class="card">
                                        <div class="card-header p-1">
                                            <p class="text-info m-0 p-0"><?php print $rowSetting['name'];?> <small>Info</small></p>
                                        </div>
                                        <div class="card-body">
                                            <p>Username : <span class="text-left"><?php print $rowSetting['username'];?></span></p>
                                            <p>Email : <span class="text-left"><?php print $rowSetting['email'];?></span></p>
                                            <p>Location : <span class="text-left"><?php print $rowSetting['locatio'];?></span></p>
                                            <p>Gender : <span class="text-left"><?php print $rowSetting['gender'];?></span></p>
                                            <p>Status : <span class="text-left"><?php print $rowSetting['statu'];?></span></p>
                                            <p>phones : <span class="text-left"><?php print $rowSetting['phone'];?></span></p>
                                        </div>
                                    </div>
                                    <?php if($rowSetting['statu'] == 'married'):?>
                                        <?php
                                            $output = '';
                                            $idWed = $rowSetting['id'];
                                            if($rowSetting['gender'] == 'Male'){
                                                $weddind = mysqli_query($con, "SELECT * FROM wedding husband_id = '$idWed'");
                                            }else{
                                                $weddind = mysqli_query($con, "SELECT * FROM wedding wife_id = '$idWed'");
                                            }
                                            
                                            if(@mysqli_num_rows($wedding) > 0){
                                                
                                                while($rowWedding = mysqli_fetch_array($wedding)){
                                                    
                                                    if($rowSetting['statu'] == 'Male'){
                                                        $selectPatner = "SELECT * FROM user_account WHERE id = '".$rowWedding['wife_id']."'";
                                                    }else{
                                                        $selectPatner = "SELECT * FROM user_account WHERE id = '".$rowWedding['husband_id']."'";
                                                    }
                                                    $runPatner = mysqli_query($con, $selectPatner);
                                                    $PatnerGet = [];
                                                    while($rowPatner = mysqli_fetch_array($runPatner)){
                                                        $PatnerGet[0] = $rowPatner['name'];
                                                        $PatnerGet[1] = $rowPatner['dob'];
                                                        $PatnerGet[2] = $rowPatner['about'];
                                                    }
                                                                                            
                                                    $output .= '
                                                        <p>'.$PatnerGet[0].'</p>
                                                        <p>Pastor : '.$rowWedding['pastor_name'].'</p>
                                                        <p>Date : '.$rowWedding['date_of'].'</p>
                                                        <p>About: <span class="text-center description">'.$rowWedding['about'].'</span></p>
                                                    ';
                                                }
                                                
                                            }else{
                                                $outFemale = '';
                                                $outPastor = '';
                                                $selectFemale = mysqli_query($con, "SELECT * FROM user_account WHERE gender LIKE 'female' AND statu LIKE 'fiance'");
                                                if(@mysqli_num_rows($selectFemale) > 0){
                                                    while($female = mysqli_fetch_array($selectFemale)){
                                                        $outFemale .= '<option value="'.$female['id'].'">'.$female['name'].'</option>';
                                                    }
                                                }else{
                                                    $outFemale .= '<option class="text-danger">There is not Female in your system</option>';
                                                }
                                                $selectPastor = mysqli_query($con, "SELECT * FROM pastor_tb");
                                                if(@mysqli_num_rows($selectPastor) > 0){
                                                    while($rowPastor = mysqli_fetch_array($selectPastor)){
                                                        $outPastor .= '<option value="'.$rowPastor['name'].'">'.$rowPastor['name'].'</option>';
                                                    }
                                                }else{
                                                    $outPastor .= '<option class="text-danger">There is not Pastor Recorded</option>';
                                                }
                                                $output .= '
                                                    <p class="text-center alert alert-danger">Add info about your wedding</p>
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <label for="partner">Patner</label>
                                                            <select name="partner" id="partner" class="form-control">
                                                                <option value="">-- select --</option>
                                                                '.$outFemale.'
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pastor">Pastor</label>
                                                            <select name="pastor" id="pastor" class="form-control">
                                                                <option value="">-- select --</option>
                                                                '.$outPastor.'
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date">date</label>
                                                            <input type="date" name="date" id="date" class="form-control" placeholder="Date" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="about">About</label>
                                                            <textarea name="about" id="about" class="form-control" placeholder="About"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-block btn-md btn-success btn-fill">Add Info <i class="fa fa-arrow-circle-right"></i></button>
                                                        </div>
                                                    </form>
                                                ';
                                            }
                                        ?>
                                        <div class="card">
                                            <div class="card-header p-1">
                                                <?php if($rowSetting['gender'] == 'Male'): ?>
                                                    <h3 class="text-success m-0 p-0"> Husband </h3>
                                                <?php else: ?>
                                                <h3 class="text-warning"> wife </h3>
                                                <?php endif; ?>
                                            </div>
                                            <div class="card-body">
                                                <?php print $output;?>
                                            </div>
                                        </div>
                                    <?php elseif($rowSetting['statu'] == 'fiance'):?>
                                        <div class="card">
                                            <button type="button" class="btn btn-block btn-md btn-success">We need to know your fiance</button>
                                        </div>
                                    <?php endif;?>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8">
                                    <h1>Choose now</h1>
                                </div>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="container-fluid m-0 p-0">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                  <a class="nav-link active" href="?setting"><i class="fa fa-cogs"></i> Settings</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="?setting=username"><i class="fa fa-user-circle"></i> Username</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="user.php"><i class="fa fa-user"></i> Back</a>
                                </li>
                            </ul>
                            <div class="row p-2 bg-white">
                                <div class="col-md-4">
                                    <img src="../public/img/sidebar-3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header p-1">
                                            <p class="m-0 p-0">How to Do!</p>
                                        </div>
                                        <div class="card-body">
                                            <h3>Dear <span class="text-uppercase"><?php print $_SESSION['name'];?></span>,</h3>
                                            <p class="display-4 text-center">
                                                Here you need to choose what you want to change or edit 
                                                then you look for it, and make whateven you want, by starting to now!!! good luck
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php else:?>
                    <div class="container-fluid">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                              <a class="nav-link" href="?setting"><i class="fa fa-cogs"></i> Settings</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="?setting=username"><i class="fa fa-user-circle"></i> Username</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="user.php"><i class="fa fa-user"></i> My account</a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header p-1">
                                        <h4 class="card-title"><i class="fa fa-user-circle"></i> Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <?php while($rowUser = mysqli_fetch_array($runUser)):?>
                                            <?php                                        
                                                if(isset($_POST['updateUser'])){
                                                    $id = $_POST['id'];
                                                    $location = mysqli_real_escape_string($con, htmlentities(trim($_POST['location'])));
                                                    $phones = mysqli_real_escape_string($con, htmlentities(trim($_POST['phones'])));
                                                    $dob = mysqli_real_escape_string($con, htmlentities(trim($_POST['dob'])));
                                                    $status = mysqli_real_escape_string($con, htmlentities(trim($_POST['status'])));
                                                    $gender = mysqli_real_escape_string($con, htmlentities(trim($_POST['gender'])));
                                                    $depart = mysqli_real_escape_string($con, htmlentities(trim($_POST['depart'])));
                                                    $about = mysqli_real_escape_string($con, htmlentities(trim($_POST['about'])));

                                                    if(empty($location)){array_push($errors, "Empty location field");}
                                                    if(empty($phones)){array_push($errors, "Empty phones field");}
                                                    if(empty($dob)){array_push($errors, "Empty date of birth field");}
                                                    if(empty($status)){array_push($errors, "Empty Status field");}
                                                    if(empty($gender)){array_push($errors, "Empty gender field");}
                                                    if(empty($depart)){array_push($errors, "Empty Department field");}
                                                    if(empty($about)){array_push($errors, "Empty About you field");}

                                                    if(count($errors) == 0){
                                                        $sql = "UPDATE user_account SET locatio='$location', phone='$phones',dob='$dob',statu='$status',gender='$gender',department='$depart',about='$about' WHERE id = '$id'";
                                                        $result = mysqli_query($con, $sql);

                                                        if( $result ){
                                                            print '<p class="alert alert-success">Updated success</p>';
                                                        }else{
                                                            print '<p class="alert alert-danger">Check your query</p>';
                                                        }
                                                    }
                                                }
                                                include("../error.php");    
                                            ?>
                                            <form action="" method="post" autocomplete="off">
                                                <div class="form-row p-0">
                                                    <div class="form-group col-md-4">
                                                        <label for="username">Username</label>
                                                        <input type="text" disabled value="<?php print $rowUser['username']; ?>" name="username" id="username" placeholder="Username" class="text-uppercase form-control transparent">
                                                        <input type="hidden" value="<?php print $rowUser['id']; ?>" name="id" id="id" class="text-uppercase form-control transparent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="name">name</label>
                                                        <input type="text" disabled value="<?php print $rowUser['name']; ?>" name="name" id="name" placeholder="name" class="form-control transparent">                                                
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="email">Email</label>
                                                        <input type="email" value="<?php print $rowUser['email']; ?>" disabled id="email" name="email" placeholder="Example@erc.com" class="form-control transparent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="location">Location</label>
                                                        <input type="text" value="<?php print $location; ?>" id="location" name="location" placeholder="location" class="form-control transparent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="phones">phones</label>
                                                        <input type="tel" value="<?php print $phones; ?>" id="phones" name="phones" placeholder="Phones" class="form-control transparent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="dob">Date of birth</label>
                                                        <input type="date" id="dob" name="dob" class="form-control transparent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="status">Status</label>
                                                        <select name="status" id="status" class="form-control transparent">
                                                            <option value="">-- select --</option>
                                                            <?php
                                                                include("./config/db.php");
                                                                $status = mysqli_query($con, "SELECT * FROM status_tb");
                                                                while($rowStatus = mysqli_fetch_array($status)){
                                                                    print '<option value="'.$rowStatus['name'].'">'.$rowStatus['name'].'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="Gender">Gender</label>
                                                        <select name="gender" value="<?php print  $gender; ?>" id="Gender" class="form-control transparent">
                                                            <option value="">-- select --</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="status">Department</label>
                                                        <select name="depart" value="<?php print  $depart; ?>" id="depart" class="form-control transparent">
                                                            <option value="">-- select --</option>
                                                            <?php
                                                                $depart = mysqli_query($con, "SELECT * FROM department_tb");
                                                                while($rowDepart = mysqli_fetch_array($depart)){
                                                                    print '<option value="'.$rowDepart['name'].'">'.$rowDepart['name'].'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="about">About</label>
                                                        <textarea name="about" value="<?php print  $about; ?>" id="about" placeholder="About ..." class="form-control transparent"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <button type="submit" name="updateUser" class="btn btn-md btn-warning btn-fill">Update <i class="fa fa-arrow-circle-right"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-image">
                                            <img src="../assets/img/full-screen-image-3.jpg" class="img-fluid" alt="converture">
                                        </div>
                                        <div class="card-body">
                                            <div class="author">
                                                <a href="#" data-lightbox="mygallery" title="<?php print $_SESSION['name'];?>">
                                                    <img class="avatar border-gray" src="../assets/img/faces/face-5.jpg"
                                                        alt="...">
                                                    <h5 class="title"><?php print $rowUser['name'];?></h5>
                                                </a>
                                                <p class="description">
                                                    <?php print $rowUser['username'];?>
                                                </p>
                                                <p class="disable description small">
                                                    <?php print $rowUser['email'];?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card">
                                    <div class="card-header p-1">
                                        <p class="description text-success m-0">About me</p>
                                        <button class="btn close btn-sm text-info" data-toggle="modal" data-target="#myModal" style="margin-top: -20px;outline: none">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-center description"><?php print $rowUser['about'];?></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="description text-center">
                                            You can change your name, email address, and password here in your settings
                                        </p>
                                        <a href="?setting" class="btn btn-block btn-primary btn-fill btn-lg">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    </div>
                <?php endif;?>
                <footer class="footer p-3">
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
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                            </p>
                        </nav>
                    </div>
                </footer>
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