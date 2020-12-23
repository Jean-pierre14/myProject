<!DOCTYPE html>
<html>

<head>
    <title>Slick Playground</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.theme.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">
    <link rel="stylesheet" href="./assets/css/style.slick.ans.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> -->
    <style type="text/css">
    html,
    body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }
    </style>
</head>

<body>

    <h3 class="text-center">Users</h3>

    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Users slick carousel</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <?php
                include './config/db.php';
                $bus = mysqli_query($con, 'SELECT * FROM user_account');?>
                <?php  
                    // if (!$bus) {
                    //     header("location:index.php");
                    // }
                    foreach($bus as $bs): ?>
                <div class="post">
                    <p><?= $bs['username'];?></p>
                </div>
                <?php  endforeach;?>
            </div>
        </div>
        <div>


            <script src="./assets/js/jquery-3.3.1.min.js"></script>
            <script src="./assets/js/bootstrap.min.js"></script>
            <script src="./assets/js/jquery.nice-select.min.js"></script>
            <script src="./assets/js/owl.carousel.min.js"></script>
            <script src="./assets/js/jquery-ui.min.js"></script>
            <script src="./assets/js/jquery.slicknav.js"></script>
            <script src="./assets/js/main.js"></script>
            <script src="./assets/js/sc.js"></script>
            <script src="./assets/js/jq.js"></script>
</body>

</html>