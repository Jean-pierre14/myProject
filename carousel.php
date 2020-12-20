<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

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
                        $output .= '<div class="owl-carous">';
                        while($row = mysqli_fetch_array($sql)){
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
</body>

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