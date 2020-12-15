<?php include_once('processForm.php') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4 col-md-4 shadow-sm my-5 offset-md-4 form-div py-3">
            <form action="./includes/imageUpload/form.php" method="post" enctype="multipart/form-data">
                <?php if (!empty($msg)): ?>
                <div class="alert <?php echo $msg_class ?>" role="alert">
                    <?php echo $msg; ?>
                </div>
                <?php endif; ?>
                <div class="form-group text-center" style="position: relative;">
                    <span class="img-div">
                        <input type="hidden" name="userId" value="<?php print $_SESSION['id'];?>" class="form-control">
                        <div class="text-center img-placeholder shadow" onClick="triggerClick()">
                            <h4>Update image</h4>
                        </div>
                        <img src="../<?php print $UserData[12];?>" onClick="triggerClick()"
                            class="img-fluid img-obj shadow-sm" id="profileDisplay">
                    </span>
                    <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage"
                        class="form-control" style="display: none;">
                </div>
                <div class="form-group">
                    <button type="submit" name="save_profile" class="btn btn-fill btn-warning btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>