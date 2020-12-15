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
      ?>
<script>
location.href = "http://localhost/erc.com/admin/user.php?imgProfile"
</script>
<?php
    }

    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE user_account SET profile_pic='/assets/images/use/user/$profileImageName' WHERE id = '$Id'";
        if(mysqli_query($con, $sql)){
          ?>
<script>
location.href = "http://localhost/erc.com/admin/user.php"
</script>
<?php
        } else {
          ?>
<script>
location.href = "http://localhost/erc.com/admin/user.php?imgProfile"
</script>
<?php
        }
      } else {
         ?>
<script>
location.href = "http://localhost/erc.com/admin/user.php?imgProfile"
</script>
<?php
      }
    }
  }

?>