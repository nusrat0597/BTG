// upload.js
$(document).ready(function () {
    $('#sliderUploadForm').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '../action.php',
            data: formData,  
            dataType: 'json', 
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status === 'success') {
                    $('#preview_img').html('<img height="100px" width="150px" src="' + response.file + '" alt="Uploaded Image">');
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function () {
                alert('Error: Unable to upload image.');
            }
        });
    });

    $("#videoUploadForm").submit(function(e){
        e.preventDefault();
        var formData = new FormData($("#videoUploadForm")[0]);
        $.ajax({
            type: "POST",
            url: '../action.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#preview_video").html(response);
            }
        });
    })
});