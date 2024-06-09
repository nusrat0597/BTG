<?php 
$db = new Data_save;
$getDestination = $db->getDestination();
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Destination Details
        </div>
        <div class="card-body">
            <form id="destinationDetailsForm" enctype="multipart/form-data">
            <select class="form-select form-select-lg mb-3" name="mainDestination" aria-label=".form-select-lg example">
                <option selected>All Destination</option>
                <?php 
                foreach($getDestination as $data){?>
                    <option value="<?php print $data['id'] ?>"><?php print $data['name'] ?></option>
                <?php } ?>
            </select>
            <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Destination Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="destinationDescription" rows="3"></textarea>
            </div>
            <div class="form-group my-3">
                    <label for="image">Choose Background Image:</label>
                    <input type="file" class="form-control-file" id="des_back_image" name="des_back_image" accept="image/*">
            </div>
            

                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <div id="preview_img"></div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Add Top Tourist Place
        </div>
        <div class="card-body">
            <form id="touristsFrom" enctype="multipart/form-data">
            <select class="form-select form-select-lg mb-3" name="mainDest" aria-label=".form-select-lg example">
                <option selected>All Destination</option>
                <?php 
                foreach($getDestination as $data){?>
                    <option value="<?php print $data['id'] ?>"><?php print $data['name'] ?></option>
                <?php } ?>
            </select>
            <div class="mb-3">
                <label for="tr_name" class="form-label">Add Place</label>
                <input type="text" class="form-control" id="tr_name" name="tr_name">
            </div>
            <div class="form-group my-3">
                    <label for="image">Choose Thumbnail Image:</label>
                    <input type="file" class="form-control-file" id="tourPlaceImage" name="tourPlaceImage" accept="image/*">
            </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <div id="preview_img"></div>
        </div>
    </div>
</div>