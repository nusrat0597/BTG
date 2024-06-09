<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating & Review</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha512-Ua/7Woz9L5O0cwB/aYexmgoaD7lw3dWe9FvXejVdgqu71gRog3oJgjSWQR55fwWx+WKuk8cl7UwA1RS6QCadFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="rating.css">
</head>
<body>

<div>
    <div class="container">
        <h1 class="mt-5 mb-5">Share your Review</h1>

    <div class="card">
        <div class="card-header">Bangladesh Tourist Guide
        <button><a href= "home.php">Go Back</a></button></div>
        <div class="card-body">
        <div class="row">
        <div class="col-sm-4 text center">
            <h1 class="text-warning mt-4 mb-4">
            <b><span id="average_rating">0.0</span>/5</b> 
            </h1>

    <div class="mb-3">
    <i class="fa fa-star star-light main_star mr-1"></i>
    <i class="fa fa-star star-light main_star mr-1"></i>
    <i class="fa fa-star star-light main_star mr-1"></i>
    <i class="fa fa-star star-light main_star mr-1"></i>
    <i class="fa fa-star star-light main_star mr-1"></i>
</div>
<h3> <span id="total_review">0</span>Review</h3>
</div>

<div class="col-sm-4 rating" >
    <div class="holder">
        <div>
        <div class="progress-label-left"><b>5</b>
        <i class="fa fa-star mr-1 text-warning"></i></div>

        <div class="progress-label-right">(<span id="total_five_star_review"></span>)
        </div>
</div>

        <div class="progress">
            <div class="progress_bar bg-warning" role="progress bar" id="five_star_progress">
            </div>
            </div>
            </div>

            
            <div class="holder">
          <div>
            <div class="progress-label-left"><b>4</b>
        <i class="fa fa-star mr-1 text-warning"></i></div>

        <div class="progress-label-right">(<span id="total_four_star_review"></span>)</div>
</div>

        <div class="progress">
            <div class="progress_bar bg-warning" role="progress bar" aria-valuenow="0" aria-valuein="0" aria-valuemax="100" id="four_star_progress">
            </div>
            </div>
</div>

<div class="holder">
            <div>
            <div class="progress-label-left"><b>3</b>
        <i class="fa fa-star mr-1 text-warning"></i></div>

        <div class="progress-label-right">(<span id="total_three_star_review"></span>)</div>
</div>

        <div class="progress">
            <div class="progress_bar bg-warning" role="progress bar" aria-valuenow="0" aria-valuein="0" aria-valuemax="100" id="three_star_progress">
            </div>
            </div>
</div>

<div class="holder">
           <div>
            <div class="progress-label-left"><b>2</b>
        <i class="fa fa-star mr-1 text-warning"></i></div>

        <div class="progress-label-right">(<span id="total_two_star_review"></span>)</div>
</div>

        <div class="progress">
            <div class="progress_bar bg-warning" role="progress bar" aria-valuenow="0" aria-valuein="0" aria-valuemax="100" id="two_star_progress">
            </div>
            </div>
</div>

<div class="holder">
           <div>
            <div class="progress-label-left"><b>1</b>
        <i class="fa fa-star mr-1 text-warning"></i></div>

        <div class="progress-label-right">(<span id="total_one_star_review"></span>)</div>
</div>

        <div class="progress">
            <div class="progress_bar bg-warning" role="progress bar" aria-valuenow="0" aria-valuein="0" aria-valuemax="100" id="one_star_progress">
            </div>
            </div>
</div>




<div class="col-sm-4 text center ">
    
    <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
</div>
</div>
</div>


<div class="mt-5" id="review_content"></div>

 

<div  class="modal"  id="review_modal">
<div class="modal-dialog">
    <div class="modal-content">


        <div class="modal-header">
            <h5 class="modal-tittle">Submit Review</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

</div>


<div class="modal-body text-center">
    <h4>
        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
</h4>

<div class="form-group">
    <input type="text" name="user_name" id="user_name" class="form_control" placeholder="Enter Your Name">
</div>
<div class="form-group">
    <textarea name="user_review" id="user_review" class="form_control" placeholder="Type Review Here"></textarea>
</div>

<div class="form-group">
    <button type="button" class="btn btn-primary" id="save_review">Submit</button>
</div>
</div>
</div>
</div>
</div>

 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha512-Ua/7Woz9L5O0cwB/aYexmgoaD7lw3dWe9FvXejVdgqu71gRog3oJgjSWQR55fwWx+WKuk8cl7UwA1RS6QCadFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
    </body>
    </html>