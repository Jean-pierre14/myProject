<?php
    require_once('../config/db.php');
    if(isset($_POST['action'])){
        if($_POST['action'] == 'editEmail'){
            $id = $_POST['id'];
            $email = htmlentities(mysqli_real_escape_string($con, trim($_POST['email'])));

            if(empty($email)){
                print 'Email is empty sorry try again';
            }else{
                $sql = mysqli_query($con, "UPDATE `user_account` SET email = '$email' WHERE id= '$id'");
                if($sql){
                    print 'Email updated';
                }else{
                    print 'There is a problem with your query';
                }
            }
        }
    }