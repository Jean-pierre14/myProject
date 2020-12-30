<?php require_once("./includes/config.php");?>


<?php

    $id = $_GET['readWedding'];
    $select = mysqli_query($con, "SELECT * FROM wedding_tb WHERE id = {$id}");
    if(@mysqli_num_rows($select)){
        $rows = mysqli_fetch_array($select);

        // Husband
        $sH = mysqli_query($con, "SELECT * FROM user_account WHERE id = {$rows['husband_id']}");
        $sW = mysqli_query($con, "SELECT * FROM user_account WHERE id = {$rows['wife_id']}");
        
        $rH = mysqli_fetch_array($sH);
        $rW = mysqli_fetch_array($sW);

        $dataGet .= '
        <div class="row">
            <div class="col-md-6">
                <div class="img-area">
                    <img src="../'.$rH['profile_pic'].'" alt="'.$rH['username'].'" class="img-fluid">
                </div>
                <p class="d-flex flex-wrap justify-content-between align-items-center">
                    <span class="">
                        name:
                    </span>
                    <span class="">
                        '.$rH['name'].'
                    </span>
                </p>
                <a href="profile.php?profile='.$rH['id'].'" class="btn btn-sm btn-primary">
                    <i class="icon eye"></i>
                    view more
                </a>
            </div>
            <div class="col-md-6">
                <div class="img-area">
                    <img src="../'.$rW['profile_pic'].'" alt="'.$rW['username'].'" class="img-fluid">
                </div>
                <p class="d-flex flex-wrap justify-content-between align-items-center">
                    <span class="">
                        name:
                    </span>
                    <span class="">
                        '.$rW['name'].'
                    </span>
                </p>
                <a href="profile.php?profile='.$rW['id'].'" class="btn btn-sm btn-danger">
                    <i class="icon eye"></i>
                    view more
                </a>
            </div>
            <div class="col-md-12 pt-3">
                <p class="d-flex flex-wrap justify-content-between align-items-center">
                    <span class="">
                        Pastor:
                    </span>
                    <span class="">
                        '.$rows['pastor_name'].'
                    </span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center">
                    <span class="">
                        Date:
                    </span>
                    <span class="">
                        '.$rows['date_of'].'
                    </span>
                </p>
                <p>
                    '.$rows['about'].'
                </p>
            </div>
        </div>
        ';
    }else{
        $dataGet .= '<p class="ui message negative alert alert-danger">We can find what you are looking for</p>';
    }

?>


<div class="container-bg-black"
    style="position: fixed;display: block; top: 0;left: 0;width: 100%; height: 100%;background: rgba(0,0,0,0.9);z-index: 9999;">
    <div class="modal" id="myModal" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Wedding</h4>
                    <a href="index.php" class="close btn" data-dismiss="modal">&times;</a>
                </div>
                <div class="modal-body">
                    <?= $dataGet;?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-danger" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>