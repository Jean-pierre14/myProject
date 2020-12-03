<?php include("./includes/header.php");?>
<section class="banner-area">
    <div class="container">
        <div class="row banner-content slideanim">
            <div class="col-md-6 p-2">
                <h1>
                    Profile/<?php print $user_array[2];?>
                </h1>
                <p>
                    <?php print $user_array[4];?>
                </p>
            </div>
            <div class="col-md-6 p-2">
                <a href="../<?php print $user_array[10];?>">
                    <img src="../<?php print $user_array[10];?>" alt="" class="img-fluid shadow">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
                if(isset($_POST['profileImage'])):
                    $target_dir = "../assets/images/";
                    $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
                        if($check !== false) {
                            $output .="File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            $output .="File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        print "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    if ($_FILES["profileImage"]["size"] > 500000) {
                        $output .="Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        $output .="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 0) {
                        $output .="Sorry, your file was not uploaded.";
                    } else {
                        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
                            
                            $output .= "The file ". basename( $_FILES["profileImage"]["name"]). " has been uploaded.";
                            $sql = mysqli_query($con, "UPDATE user_account SET profile_pic= '$' WHERE id = '$Id'");
                        } else {
                            $output .="Sorry, there was an error uploading your file.";
                        }
                    }
                endif;
            ?>
            <?php include("./includes/form.php");?>
        </div>
    </div>
</section>
<?php include("./includes/footer.php");?>