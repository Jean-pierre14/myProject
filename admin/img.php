<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/css/croppie.css">
</head>

<body>
    <!-- Form -->
    <div class="container">
        <br />
        <h3 align="center">Image Crop & Upload using JQuery with PHP Ajax</h3>
        <br />
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Select Profile Image</div>
            <div class="panel-body" align="center">
                <input type="file" name="upload_image" id="upload_image" />
                <br />
                <div id="uploaded_image"></div>
            </div>
        </div>
    </div>
    <!-- Form -->
    <!-- Upload image profile -->
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload & Crop Image</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 text-center">
                            <div id="image_demo" style="width:100%; margin-top:30px"></div>
                        </div>
                        <div class="col-md-4" style="padding-top:30px;">
                            <br />
                            <br />
                            <br />
                            <button class="btn btn-success crop_image">Crop & Upload Image</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Upload image profile -->

    <!-- Script -->

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootst.js"></script>
    <script src="../assets/css/croppie.js"></script>

    <script>
    $(document).ready(function() {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 350,
                height: 350
            }
        });

        $('#upload_image').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "./includes/upload.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        $('#uploaded_image').html(data);
                    }
                });
            })
        });
    })
    </script>
    <!-- Script -->
</body>

</html>