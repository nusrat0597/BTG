$(document).ready(function(){
    $('#desUploadForm').submit(function (e) {
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
                console.log(response);
                if (response.status === 'success') {
                    $('#preview_des').html('<img height="100px" width="150px" src="' + response.file + '" alt="Uploaded Image">');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function () {
                alert('Error: Unable to upload image.');
            }
        });
    });
    var originalFormHtml = $('#destinationDetailsForm').html();
     $('#destinationDetailsForm').submit(function (e) {
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
                
               console.log(response);
               if(response.status === 'success'){
                $('#destinationDetailsForm').html(originalFormHtml);
               }
            },
            error: function () {
                // alert('Error: Unable to upload image.');
            }
        });
    });
    

    var originalTourHtml = $('#touristsFrom').html();
     $('#touristsFrom').submit(function (e) {
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
                
               console.log(response.status);
               if(response.status === 'success'){
                $('#touristsFrom').html(originalTourHtml);
               }
            },
            error: function () {
                // alert('Error: Unable to upload image.');
            }
        });
    });


    $('.allCity').change(function () {
        var selectedValue = $(this).val();

        $.ajax({
            type: 'POST',
            url: '../action.php',
            data: {
                selectId:selectedValue
            },
            dataType: 'json',
            success: function (response) {
                var selectElement = $('select[name="tourPlace"]');
               if (response.status === 'success') {
                
                // Clear existing options
                selectElement.find('option').remove();

                // Add a default option
                selectElement.append('<option selected>This City Tour Place</option>');

                // Add options based on the response data
                response.data.forEach(function (place) {
                    selectElement.append('<option value="' + place.id + '">' + place.name + '</option>');
                });
            } else {
                // Clear existing options
                selectElement.find('option').remove();
                // console.log('Error in response status');
                selectElement.append('<option selected>There is no place here</option>');
            }
            },
            error: function () {
                // alert('Error: Unable to upload image.');
            }
        });

    });


    // var originalBlogHtml = $('#blogForm').html();
     $('#blogForm').submit(function (e) {
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
                
               console.log(response.status);
               if(response.status === 'success'){
                $("#blogHeading").val("");
                $("#blogDes").val("");
                $("#blogImage").val("");
               }
            },
            error: function () {
                // alert('Error: Unable to upload image.');
            }
        });
    });

})