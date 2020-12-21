<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <?php
        $dataid;
                $data = mysqli_query($con,"SELECT * FROM feedback");
                    $count = mysqli_num_rows($data);
                    if ($count != 0) {
                        echo '
                        <div class="row ">';
                    while($row = mysqli_fetch_array($data)) { 
                    echo '             
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">        
                        <div class="item carousel-item active">
                            <p class="testimonial">'. $row['comment'] .'</p>
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
</div>