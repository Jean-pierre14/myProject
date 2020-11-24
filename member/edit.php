<?php include("./includes/header.php");?>
<section class="banner-area">
    <div class="container">
        <div class="row banner-content justify-content-center slideanim">
            <div class="col-md-12">
                <h1>
                    Profile/<?php print $user_array[2];?>
                </h1>
                <p>
                    <?php print $user_array[4];?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php include("./includes/form.php");?>
        </div>
    </div>
</section>
<?php include("./includes/footer.php");?>