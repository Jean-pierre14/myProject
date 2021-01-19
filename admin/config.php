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
                            <div style="cursor: pointer" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center show-case" data-id="' . $wedding_id . '">
                                <span>'  . $arraryH[1] . ' & ' . $arraryW[1] . '</span>
                                <span>' . $row['pastor_name'] . '</span>
                                <span>
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
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
    if ($_POST['action'] == 'Weddings') {
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
                            <a href="wedding.php?get='.$row['id'].'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center show-case" data-id="' . $wedding_id . '">
                                <span>'  . $arraryH[2] . ' & ' . $arraryW[2] . '</span>
                                <span>' . $row['pastor_name'] . '</span>
                                <span>
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>                            
                        </div>
                ';
            }
        } else {
            $output .= '<p class="alert alert-danger ui message negative">There is not Weddings registered</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'id_wedding') {
        $id = $_POST['id'];
        $sql = mysqli_query($con, "SELECT * FROM wedding_tb WHERE id = {$id}");
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
                <div class="shadow box-dashboard bg-white">
                    <span class="top-icon bg-primary">
                        <i class="fa fa-user fa-2x"></i>
                    </span>
                    <p class="d-flex justify-content-between align-items-center mt-5">
                        <span>
                            <b>Husband name: </b>
                        </span>
                        <span>
                            '.$arraryH[1].'
                        </span>
                        <span>
                            <a id="getMeH" href="users.php?user='.$arraryH[0].'" class="btn border-0 p-2 shadow color-hero">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </span>
                    </p>
                    <p class="d-flex justify-content-between align-items-center mt-2">
                        <span>
                            <b>Wife Name: </b>
                        </span>
                        <span>
                            '.$arraryW[1].'
                        </span>
                        <span>
                            <a href="/users.php?user='.$arraryW[0].'" data-id="'.$arraryW[0].'" data-toggle="modal"
                                class="btn  border-0 p-2 shadow color-hero">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </span>
                    </p>
                    <p class="d-flex justify-content-between align-items-center mt-2">
                        <span>
                            <b>Pastor Name: </b>
                        </span>
                        <span>
                            '.$row['pastor_name'].'
                        </span>
                        <span>
                            <button type="button" data-target="#editPastor" data-toggle="modal"
                                class="btn  border-0 p-2 shadow color-hero">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                        </span>
                    </p>
                    <p class="d-flex justify-content-between align-items-center mt-2">
                        <span>
                            <b>About: </b>
                        </span>
                        <span>
                            '.$row['about'].'
                        </span>
                        <span>
                            <button type="button" data-target="#editPastor" data-toggle="modal"
                                class="btn  border-0 p-2 shadow color-hero">
                                <i class="fa fa-edit"></i>
                            </button>
                        </span>
                    </p>
                </div>
                <div class="shadow box-dashboard bg-white mt-4">
                    <span class="top-icon bg-hero">
                        <i class="fa fa-gift fa-2x"></i>
                    </span>
                    <p class="d-flex justify-content-between align-items-center mt-5">
                        <span>
                            <b>Date of the wedding: </b>
                        </span>
                        <span>
                            '.$row['date_of'].'
                        </span>
                        <span>
                            <button type="button" data-target="#editPastor" data-toggle="modal"
                                class="btn  border-0 p-2 shadow color-hero">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                        </span>
                    </p>
                </div>
                <div class="shadow box-dashboard bg-white mt-4">
                    <span class="top-icon bg-danger">
                        <i class="fa fa-trash fa-2x"></i>
                    </span>
                    <p class="d-flex justify-content-between align-items-center mt-5 text-danger">
                        <span>
                            <b>Divorce: </b>
                        </span>
                        <span>
                            '.$arraryH[1].' '.$arraryW[1].'
                        </span>
                        <span>
                            <button type="button" data-target="#editPastor" data-toggle="modal"
                                class="btn btn-danger border-0 p-2 shadow color-hero">
                                <i class="fa fa-trash"></i>
                            </button>
                        </span>
                    </p>
                </div>
                ';
                $output .= '
                    
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
    if($_POST['action'] == 'getMe'){
        
        $id = $_POST['id'];
        $idW = $_POST['id_wedding'];

        $sql = mysqli_query($con, "SELECT * FROM user_account WHERE id = {$id}");
        if(mysqli_num_rows($sql) == 1){
           while($row = mysqli_fetch_assoc($sql)){
                $output .= '
                <div class="modal shadow" id="myModal" style="display:block">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close btn btn-sm closeMe">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="card">
                                            <img src="../'.$row['profile_pic'].'" alt="" class="img-fluid card-img-top">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="box-dashboard shadow">
                                            <div class="top-icon-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="mt-4">
                                                <p class="d-flex">
                                                    <span class="">Name: </span>
                                                    <span class="">'.$row['name'].'</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-fill btn-danger closeMe" data-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                </div>
                ';
           } 
        }else{
            $output .= '<p class="alert alert-danger ui message negative">Haking is perfect</p>';
        }
        print $output;
    }
    // Dashboard items
    if ($_POST['action'] == 'requestCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countRequest FROM suscribe_tb WHERE read_unread ='unread'");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                print $row['countRequest'];
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'pastorCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM pastor_tb");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'weddingCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM wedding_tb");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'usersCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM user_account");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'divorceCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM user_account WHERE statu = 'divorce'");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'singleCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM user_account WHERE statu = 'single'");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'maleCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM user_account WHERE gender = 'male'");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-hero btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }
    if ($_POST['action'] == 'femaleCount'){
        $sql = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM user_account WHERE gender = 'female'");
        
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                if($row['countItem'] == 0){
                    print '<p class="btn btn-danger btn-sm shadow">Zero</p>';
                }else{
                    print '<p class="btn bg-success text-light btn-sm shadow">'.$row['countItem'].'</p>';
                }
            }else{
                print 'Zero';
            }
        }else{
            print 'Error';
        }
    }

    if($_POST['action'] == 'tablePastor'){
        $output .= '
        <table class="table table-sm table-hover table-striped">
            <thead>
                <tr>
                    <th>Full name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        ';
        $sql = mysqli_query($con, 'SELECT * FROM pastor_tb ORDER BY id DESC LIMIT 4');
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $sqlPastor = mysqli_query($con, "SELECT * FROM user_account WHERE id= '".$row['user_id']."'");
                $arrayPastor = array();
                while($data = mysqli_fetch_assoc($sqlPastor)){
                    $output .= '
                    <tr class="">
                        <td class="">'.$row['pastor_name'].'</td>
                        <td class="">'.$data['email'].'</td>
                        <td class="">'.$data['phone'].'</td>
                        <td class="">
                            <div class="btn-group delete">
                                <a href="pastor.php?get='.$row['user_id'].'" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="index.php?delete='.$row['user_id'].'" onclick="confirm(`do you want to delete`)" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
                }
            }
        }else{
            $output .= '<p class="p-3 alert alert-danger ui message negative">There is not data into record</p>';
        }
        $output .= '
            </tbody>
        </table>
        ';
        print $output;
    }

    if($_POST['action'] == 'users'){
        $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 3");
        if(mysqli_num_rows($sql) > 0){
            $output .= '
                    <div class="list-group list-group-flush m-0">
                ';
            while($row = mysqli_fetch_assoc($sql)){
                $output .= '
                    <a href="./users.php?user='.$row['id'].'" class="d-flex justify-content-between list-group-item">';
                if($row['profile_pic'] == ''){
                    $output .= '
                    <span>
                        <img class"ui avatar" src="../assets/images/use/user/face-0.jpg" style="width: 30px;border-radius: 50%"/>
                    </span>
                    ';
                }else{
                    $output .= '
                    <span>
                        <img class"ui avatar" src="../'.$row['profile_pic'].'" style="width: 30px;border-radius: 50%"/>
                    </span>
                    ';
                }
                $output .= '
                        <span class="">'.$row['username'].'</span>
                    </a>
                ';
            }
            $output .= '</div>';
        }else{
            $output .= '<p class="alert alert-danger ui message negative">There is not data</p>';
        }
        print $output;
    }
    
    // Dashboard end 

    if($_POST['action'] == 'usersList'){
        $offset = $_POST['offset'];
        $limit = $_POST['limit'];
        $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT {$limit}");
        if(mysqli_num_rows($sql) > 0){
            $output .= '
                    <div class="list-group mt-3 shadow list-group-flush m-0">
                ';
            while($row = mysqli_fetch_assoc($sql)){
                $output .= '
                    <a href="./users.php?user='.$row['id'].'" class="d-flex justify-content-between list-group-item">';
                if($row['profile_pic'] == ''){
                    $output .= '
                    <span>
                        <img class"ui avatar" src="../assets/images/use/user/face-0.jpg" style="width: 30px;border-radius: 50%"/>
                    </span>
                    ';
                }else{
                    $output .= '
                    <span>
                        <img class"ui avatar" src="../'.$row['profile_pic'].'" style="width: 30px;border-radius: 50%"/>
                    </span>
                    ';
                }
                $output .= '
                        <span class="">'.$row['username'].'</span>
                    </a>
                ';
            }
            $output .= '</div>';
        }else{
            $output .= '<p class="alert alert-danger ui message negative">There is not data</p>';
        }
        print $output;
    }
}