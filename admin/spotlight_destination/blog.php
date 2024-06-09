<?php 
$db = new Data_save;
$allCity = $db->getDestination();
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Add Blog
        </div>
        <div class="card-body">
            <form id="blogForm" enctype="multipart/form-data">
            <select class="form-select form-select-lg mb-3 allCity" name="allCity" aria-label=".form-select-lg example">
                <option selected>All City</option>
                <?php foreach($allCity as $city){ ?>
                    <option value="<?php print $city['id'] ?>"><?php print $city['name'] ?></option>
                <?php } ?>
            </select>
            
            <select class="form-select form-select-lg mb-3" name="tourPlace" aria-label=".form-select-lg example">
                <option selected>This City Tour Place</option>
                    <option value=""></option>
            </select>
            <div class="form-group my-3">
                    <label for="image">Choose Background Image:</label>
                    <input type="file" class="form-control-file" id="blogImage" name="blogImage" accept="image/*">
            </div>
            <div class="blog_add_container">
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <label for="tr_name" class="form-label">Add Title </label>
                    </div>
                    <input type="text" class="form-control" id="blogHeading" name="blogHeading">
                </div>
                <div class="form-group mb-3">
                    <label for="blogDes">Add Description</label>
                    <textarea class="form-control" id="blogDes" name="blogDes" rows="3"></textarea>
                </div>
            </div>
            
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <div id="preview_img"></div>
        </div>
    </div>
</div>