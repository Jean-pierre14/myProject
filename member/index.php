<?php
    include("lock.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERC</title>
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <script src="../public/bootstrap/jquery.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron m-0">
        <h1>Restoration Church Goma</h1>
        <p>Evangelical Restoration Church <small class="small">ERC</small></p>
      </div>

    <nav class="nav-main">
        <a href="index.php" class="navbar-brand">ERC</a>
        <ul class="nav-box">
            <li class="nav-item text-light">
                <a href="index.php" class="nav-link text-light active"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a href="?event=programmes" class="nav-link text-light"><i class="fa fa-home"></i> Programmes</a>
            </li>
            <li class="nav-item">
                <a href="?event=blog" class="nav-link text-light"><i class="fa fa-home"></i> Blog</a>
            </li>
            <li class="nav-item">
                <a href="?event=profile" class="nav-link text-light"><i class="fa fa-home"></i> Profile</a>
            </li>
        </ul>
    </nav>

    <?php if(isset($_GET['event'])):?>
        <?php if($_GET['event'] == 'programmes'):?>
            <div class="container">
                <h3 class="display-3">Programmes</h3>
            </div>
        <?php endif;?>

        <?php if($_GET['event'] == 'blog'):?>
            <div class="container-fluid">
                <h3 class="display-2">Blog</h3>
            </div>
        <?php endif;?>

        <?php if($_GET['event'] == 'profile'):?>
            <div class="container-fluid">
                <h3 class="display-2">Profile</h3>
            </div>
        <?php endif;?>

    <?php else:?>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">
                <a href="nav.php" class="btn btn-primary">nav</a>
                <h3 class="display-2 text-danger">home</h3>
              </div>  
            </div>
        </div>
    <?php endif;?>
</body>
</html>