<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="post_text" id="post_text" class="form-control" placeholder="Wright something...">
    </div>
    <div class="form-group">
        <img src="./images/tora/avatar3.png" onClick="triggerClick()" id="profileDisplay">
        <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control"
            style="display: none;" g>
    </div>
    <div class="form-group col-md-4">
        <button type="submit" name="profileImage" id="profileImage" class="btn btn-primary">Post</button>
    </div>
</form>