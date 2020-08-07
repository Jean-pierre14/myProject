<?php
require_once('../config/db.php');
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'editName') {
        $id = $_POST['id'];
        $name = htmlentities(mysqli_real_escape_string($con, trim($_POST['name'])));

        if (empty($name)) {
            print 'Name is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `name` = '$name' WHERE id= '$id'");
            if ($sql) {
                print 'Name updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editStatus') {
        $id = $_POST['id'];
        $status = htmlentities(mysqli_real_escape_string($con, trim($_POST['status'])));

        if (empty($status)) {
            print 'status is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `statu` = '$status' WHERE id= '$id'");
            if ($sql) {
                print 'status updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editGender') {
        $id = $_POST['id'];
        $gender = htmlentities(mysqli_real_escape_string($con, trim($_POST['gender'])));

        if (empty($gender)) {
            print 'gender is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `gender` = '$gender' WHERE id= '$id'");
            if ($sql) {
                print 'gender updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editPhone') {
        $id = $_POST['id'];
        $phone = htmlentities(mysqli_real_escape_string($con, trim($_POST['phone'])));

        if (empty($phone)) {
            print 'gender is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `phone` = '$phone' WHERE id= '$id'");
            if ($sql) {
                print 'phone updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editDepartment') {

        $id = $_POST['id'];
        $department = htmlentities(mysqli_real_escape_string($con, trim($_POST['department'])));

        if (empty($department)) {
            print 'Department is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `department` = '$department' WHERE id= '$id'");
            if ($sql) {
                print 'department updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editLocation') {
        $id = $_POST['id'];
        $location = htmlentities(mysqli_real_escape_string($con, trim($_POST['location'])));

        if (empty($location)) {
            print 'Location is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET `locatio` = '$location' WHERE id= '$id'");
            if ($sql) {
                print 'Name updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editPhone') {
        $id = $_POST['id'];
        $phone = htmlentities(mysqli_real_escape_string($con, trim($_POST['phone'])));

        if (empty($phone)) {
            print 'phone is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET phone = '$phone' WHERE id= '$id'");
            if ($sql) {
                print 'phone updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editDob') {
        $id = $_POST['id'];
        $dob = htmlentities(mysqli_real_escape_string($con, trim($_POST['dob'])));

        if (empty($dob)) {
            print 'Date of birth is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET dob = '$dob' WHERE id= '$id'");
            if ($sql) {
                print 'Date of birth updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editUsername') {
        $id = $_POST['id'];
        $username = htmlentities(mysqli_real_escape_string($con, trim($_POST['username'])));

        if (empty($username)) {
            print 'Username is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET username = '$username' WHERE id= '$id'");
            if ($sql) {
                print 'Username updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editAbout') {
        $id = $_POST['id'];
        $about = htmlentities(mysqli_real_escape_string($con, trim($_POST['about'])));

        if (empty($about)) {
            print 'Description is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET about = '$about' WHERE id= '$id'");
            if ($sql) {
                print 'Description updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
    if ($_POST['action'] == 'editEmail') {
        $id = $_POST['id'];
        $email = htmlentities(mysqli_real_escape_string($con, trim($_POST['email'])));

        if (empty($email)) {
            print 'Email is empty sorry try again';
        } else {
            $sql = mysqli_query($con, "UPDATE `user_account` SET email = '$email' WHERE id= '$id'");
            if ($sql) {
                print 'Email updated';
            } else {
                print 'There is a problem with your query';
            }
        }
    }
}