<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <!-- <link rel="stylesheet" href="./css/bootstrap.css"> -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="./public/js/jquery-3.4.0.min.js"></script>
    <!-- <script src="./js/owl-carousel-thumb.min.js"></script> -->
    <script src="./js/owl.carousel.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3>Carousel reading user imgs</h3>
                <?php
                    include("./config/db.php");
                    $output = '';
                    $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC");
                    if(@mysqli_num_rows($sql) > 0){
                        $output .= '<div id="demo" class="carousel slide" data-ride="carousel">';
                        while($row = mysqli_fetch_array($sql)){
                            $output .= '
                            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
                            ';
                            $output .= '
                            <div class="item">
                                <img class="img-fluid" src="./'.$row['profile_pic'].'">
                            </div>
                            ';
                        }
                        $output .= '</div>';
                    }else{
                        $output .= '<p class="alert alert-warning">there no user registrated</p>';
                    }
                ?>
                <h3>Carousel</h3>
                <div class="">
                    <?php print $output;?>
                </div>
            </div>
        </div>
    </div>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="la.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="chicago.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="ny.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</body>

<!-- Carousel -->
<script>
$('.owl-carous').owlCarousel({
    loop: true,
    margin: 90,
    nav: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
</script>

</html>