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
                        $output .= '
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                        ';
                        $active = 1;
                        while($row = mysqli_fetch_array($sql)){
                            // $output .= '
                            // <ul class="carousel-indicators">
                            //     <li data-target="#demo" data-slide-to="0" class="active"></li>
                            //     <li data-target="#demo" data-slide-to="1"></li>
                            //     <li data-target="#demo" data-slide-to="2"></li>
                            // </ul>
                            // ';

                            if($active == 1):
                                $output .= '
                                <div class="carousel-item active">
                                    <img src="./'.$row['profile_pic'].'" class="img-fluid" alt="'.$row['username'].'">
                                </div>
                                ';
                            else:
                                $output .= '
                                <div class="carousel-item">
                                    <img src="./'.$row['profile_pic'].'" class="img-fluid" alt="'.$row['username'].'">
                                </div>
                                ';
                            endif;
                        }
                        $active.= +1;
                        $output .= '</div>';
                    }else{
                        $output .= '<p class="alert alert-warning">there no user registrated</p>';
                    }
                ?>
                <h3>Carousel</h3>

                <?php print $output;?>

            </div>
        </div>
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