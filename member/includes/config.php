<?php
require_once("../config/db.php");

$output = '';

$Id = $_SESSION['id'];
$user_array = array();

$User = mysqli_query($con, "SELECT * FROM user_account WHERE id='$Id'");

if(@mysqli_num_rows($User) > 0){
    while($data = mysqli_fetch_assoc($User)){
        $user_array[0] = $data['id'];
        $user_array[1] = $data['username'];
        $user_array[2] = $data['name'];
        $user_array[3] = $data['email'];
        $user_array[4] = $data['about'];
        $user_array[5] = $data['department'];
        $user_array[6] = $data['locatio'];
        $user_array[7] = $data['statu'];
        $user_array[8] = $data['gender'];
        $user_array[9] = $data['phone'];
        $user_array[10] = $data['profile_pic'];
        $user_array[11] = $data['create_at'];
    }
}else{
    header("Location: ../login.php");
}

$sqlm = mysqli_query($con, "SELECT * FROM user_account WHERE gender = 'Male' ORDER BY id DESC LIMIT 1");
$sqlf = mysqli_query($con, "SELECT * FROM user_account WHERE gender = 'Female' ORDER BY id DESC LIMIT 1");

$datam = @mysqli_fetch_array($sqlm);
$dataf = @mysqli_fetch_array($sqlf);

$outm = '';
$outf = '';

if(@mysqli_num_rows($sqlm)>0){
    $outm.='
    <a href="profile.php?profile='.$datam['id'].'" title="'.$datam['name'].'">
        <img class="img-fluid shadow m-1" src="../'.$datam['profile_pic'].'" width="100%" height="100%">
    </a>';
}else{$outm.='<img class="img-fluid" src="img/blog/post-img1.jpg">';}
if(@mysqli_num_rows($sqlf)>0){
    $outf.='
    <a href="profile.php?profile='.$dataf['id'].'" title="'.$dataf['name'].'">
        <img class="img-fluid shadow m-1" src="../'.$dataf['profile_pic'].'" width="100%" height="100%">
    </a>';
}else{$outf.='<img class="img-fluid" src="img/blog/post-img1.jpg">';}

$dataGet = '';

if(isset($_GET['eadWedding'])){
    $idSelect = mysqli_query($con, "SELECT * FROM wedding_tb  WHERE id = {$id}");
    if(@mysqli_num_rows($idSelect) > 0){
        $data = mysqli_fetch_array($idSelect);
        $selectH = mysqli_query($con, "SELECT * FROM user_account WHERE id = {$data['husband_id']}");
        $selectW = mysqli_query($con, "SELECT * FROM user_account WHERE id = {$data['wife_id']}");
        
        
        $arrayH = [];
        while($dataH = mysqli_fetch_array($selectH)){
            $arrayH[0] = $dataH['id'];
            $arrayH[1] = $dataH['username'];
            $arrayH[2] = $dataH['name'];
        }

        $dataGet .= '<p>'.$data['husband_id'].'</p>';
    }else{
        $dataGet .= '';
    }
    print $dataGet;
}