<?php

$output = '';
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
    if ($_POST['action'] == 'weddingRecord') {
        $husband = $_POST['husband'];
        $wife = $_POST['wife'];
        $about = $_POST['about'];
        $date = $_POST['date'];
        $pastor = $_POST['pastor'];

        $sql = mysqli_query($con, "INSERT INTO wedding_tb(pastor_name, husband_id, wife_id, about, date_of) VALUES( '$pastor', '$husband', '$wife', '$about', '$date')");
        $ChHusband = mysqli_query($con, "UPDATE user_account SET statu = 'married' WHERE id = '$husband'");
        $ChWife = mysqli_query($con, "UPDATE user_account SET statu = 'married' WHERE id = '$wife'");
        if ($sql) {
            print 'Wedding recored';
        } else {
            print 'Try again sorry';
        }
    }
    if ($_POST['action'] == 'weddings') {
        $limit = $_POST['limit'];
        $offset = $_POST['offset'];

        $sql = mysqli_query($con, "SELECT * FROM wedding_tb ORDER BY id DESC LIMIT {$limit}");
        if (mysqli_num_rows($sql) > 0) {

            while ($row = mysqli_fetch_assoc($sql)) {
                $sqlHusband = mysqli_query($con, "SELECT * FROM user_account WHERE id ={$row['husband_id']}");
                $sqlWife = mysqli_query($con, "SELECT * FROM user_account WHERE id ={$row['wife_id']}");
                $wedding_id = $row['id'];
                while ($rowH = mysqli_fetch_assoc($sqlHusband)) {
                    $arraryH = array();
                    $arraryH[0] = $rowH['id'];
                    $arraryH[1] = $rowH['name'];
                    $arraryH[2] = $rowH['username'];
                    $arraryH[3] = $rowH['email'];
                    $arraryH[4] = $rowH['locatio'];
                    $arraryH[5] = $rowH['statu'];
                    $arraryH[6] = $rowH['gender'];
                    $arraryH[7] = $rowH['department'];
                    $arraryH[10] = $rowH['dob'];
                    $arraryH[11] = $rowH['profile_pic'];
                    $arraryH[12] = $rowH['about'];
                    $arraryH[13] = $rowH['on_off'];
                    $arraryH[14] = $rowH['phone'];
                }
                while ($rowW = mysqli_fetch_assoc($sqlWife)) {
                    $arraryW = array();
                    $arraryW[0] = $rowW['id'];
                    $arraryW[1] = $rowW['name'];
                    $arraryW[2] = $rowW['username'];
                    $arraryW[3] = $rowW['email'];
                    $arraryW[4] = $rowW['locatio'];
                    $arraryW[5] = $rowW['statu'];
                    $arraryW[6] = $rowW['gender'];
                    $arraryW[7] = $rowW['department'];
                    $arraryW[10] = $rowW['dob'];
                    $arraryW[11] = $rowW['profile_pic'];
                    $arraryW[12] = $rowW['about'];
                    $arraryW[13] = $rowW['on_off'];
                    $arraryW[14] = $rowW['phone'];
                }

                $output .= '
                        <div class="list-group list-group-flush">
                            <p style="cursor: pointer" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center show-case" data-id="' . $wedding_id . '">
                                <span>'  . $arraryH[1] . ' & ' . $arraryW[1] . '</span>
                                <span>' . $row['pastor_name'] . '</span>
                                <span>
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </p>
                            <div class="container-fluid p-0 display-' . $row['id'] . '" style="display: none">
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img src="' . $arraryH[11] . '" alt="" class="card-img-top">
                                            <div class="card-body">
                                                <div class="list-group">
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryH[1] . '
                                                        </span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-map"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryH[4] . '
                                                        </span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-phone"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryH[14] . '
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img src="' . $arraryW[11] . '" alt="" class="card-img-top">
                                            <div class="card-body">
                                                <div class="list-group">
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryW[1] . '
                                                        </span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-map"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryW[4] . '
                                                        </span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="">
                                                            <i class="fa fa-phone"></i>
                                                        </span>
                                                        <span class="">
                                                            ' . $arraryW[14] . '
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="d-flex justify-content-between align-items-center">
                                                    <span class="">Date: </span>
                                                    <span class="">' . $row['date_of'] . '</span>
                                                </p>
                                                <p class="d-flex justify-content-between align-items-center">
                                                    <span class="">Pastor: </span>
                                                    <span class="">' . $row['pastor_name'] . '</span>
                                                </p>
                                                <a href="./wedding.php?get=' . $row['id'] . '" class="btn btn-danger btn-fill btn-sm">Divorce</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                ';
            }
        } else {
            $output .= '<p class="alert alert-danger ui message negative">There is not Weddings registered</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'divorce') {
        $id = $_POST['id'];
        $h = $_POST['h'];
        $w = $_POST['w'];
        $h_name = $_POST['h_name'];
        $w_name = $_POST['w_name'];

        $divorce = mysqli_query($con, "INSERT INTO divorce_tb(h_id, h_name, w_id, w_name) VALUE('$h', '$h_name', '$w', '$w_name')");
        $sql = mysqli_query($con, "DELETE FROM wedding_tb WHERE id = {$id}");
        $divorceH = mysqli_query($con, "UPDATE user_account SET statu = 'divorce' WHERE id = {$h}");
        $divorceW = mysqli_query($con, "UPDATE user_account SET statu = 'divorce' WHERE id = {$w}");

        print 'Divorce success';
    }
}