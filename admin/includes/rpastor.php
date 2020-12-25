<div class="modal-body">
    <div id="successMsg"></div>

    <?php
    $pastorName = '';
    if(isset($_POST['rpastor'])):
        
        $userId = mysqli_real_escape_string($con, trim(htmlentities($_POST['pastorId'])));
        $pastorName = mysqli_real_escape_string($con, trim(htmlentities($_POST['pastorName'])));


        if(empty($userId)){array_push($errors, '<p class="ui message negative alert aler-danger">This is no defined</p>');}
        if(empty($pastorName)){array_push($errors, '<p class="ui message negative alert aler-danger">Pastor name\'s required</p>');}

        // Preg_match function
        $num = preg_match('@[0-9]@', $pastorName);
        if($num){array_push($errors, '<p class="ui message negative alert aler-danger">The pastor name can\'t have numbers</p>');}

        // the check the length of the pastor name
        if(strlen($pastorName) < 8){array_push($errors, '<p class="ui message negative alert alert-danger">Pastor name can\'t be less than 9 characters</p>');}

        // To if he doen't exist yet into the DB
        $check = mysqli_query($con, "SELECT * FROM pastor_tb WHERE `user_id` = {$userId}");
        
        if(@mysqli_num_rows($check) > 0){array_push($errors, '<p class="ui message negative alert alert-danger">He already registrated</p>');}
        
        // If There no error now we can execute those line of codes
        if(count($errors) == 0){
            $NEW = mysqli_query($con, "INSERT INTO pastor_tb(`user_id`, `pastor_name`) VALUES('$userId', '$pastorName')");
            
            // success message
            if($NEW){
                print '<p class="ui message positive alert alert-success">Registration success</p>';
            }else{    
            // error message
                print '<p class="ui message positive alert alert-success">Registration success</p>';
            };
        }
        /** The end */
    endif;

    foreach($errors as $error):
        print $error;
    endforeach;
    ?>

    <form action="" method="post">
        <div class="form-group">
            <select name="pastorId" id="pastorId" class="custom-select">
                <option value="">-- Select Pastor ---</option>
                <?php
                                $item = '';
                                $recordPastor = mysqli_query($con, "SELECT * FROM user_account WHERE (statu = 'married' OR statu = 'divorce')");
                                if (@mysqli_num_rows($recordPastor) > 0) {
                                    while ($rowrecord = mysqli_fetch_array($recordPastor)) {
                                        $pastorId = $rowrecord['id'];
                                        $pastorname = $rowrecord['name'];
                                        print '<option value="' . $pastorId . '">' . $pastorname . '</option>';
                                    }
                                } else {
                                    $item .= '<option class="text-danger">There no data</option>';
                                }
                                ?>
            </select>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" value="<?= $pastorName;?>" class="form-control" name="pastorName" id="pastorName"
                    placeholder="Your Pastor">
                <div class="input-group-append">
                    <span class="input-group-text">Pastor name</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="rpastor" class="btn btn-fill btn-sm btn-success">Register <i
                    class="fa fa-arrow-circle-right"></i></button>
        </div>
    </form>
</div>