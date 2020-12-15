<?php
  
  $msg = "";
  $msg_class = "";
  
  $con = mysqli_connect("localhost", "root", "", "erc_db") OR die("Cannot be connect to this DB");
  if (isset($_POST['save_profile'])) {
    // for the database
    $Id = $_POST['userId'];
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "../../../assets/images/use/user/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 500000) {
      $msg = "Image size should not be greated than 500Kb";
      $msg_class = "alert-danger";
    }

    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }

    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE user_account SET profile_pic='/assets/images/use/user/$profileImageName' WHERE id = '$Id'";
        if(mysqli_query($con, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }

?>