<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/all.min.css">
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <script src="./public/js/all.min.js"></script>
    <script src="./public/bootstrap/jquery.min.js"></script>
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/bootstrap/popper.min.js"></script>
</head>

<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <?php
        $dataid;
                $con = mysqli_connect("localhost", "root", "", "erc_db") or die("Cannot be connected to this db");
                $data = mysqli_query($con,"SELECT * FROM user_account limit 5");
                    $count = mysqli_num_rows($data);
                    if ($count != 0) {
                        echo '
                        <div class="row ">';
                    while($row = mysqli_fetch_array($data)) { 
                    echo '             
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">        
                        <div class="item carousel-item active">
                            <p class="testimonial">'. $row['username'] .'</p>
                            <p class="overview"><b>Anonymous</b></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <a href="index.html"><li class="list-inline-item"><i class="fa fa-heart" ></i></li></a>&nbsp;&nbsp;
                                    <a href="index.html"><li class="list-inline-item"><i class="fas fa-thumbtack" ></i></li></a>&nbsp;&nbsp;
                                    <a href="index.html"><li class="list-inline-item"><i class="fas fa-archive"></i></li></a>&nbsp;&nbsp;
                                    <a href="index.html"><li class="list-inline-item"><i class="fa fa-trash" ></i></li></a>&nbsp;&nbsp;
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </div>      
                    </div>

                    ';              
            }
          }
        ?>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</body>

</html>