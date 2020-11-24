<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <img src="../<?php print $user_array[10];?>" onClick="triggerClick()" id="profileDisplay" class="img-fluid">
        <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control"
            style="display: none;">
    </div>
    <div class="form-group col-md-4">
        <button type="submit" name="profileImage" id="profileImage" class="btn btn-primary">Upload</button>
    </div>
</form>