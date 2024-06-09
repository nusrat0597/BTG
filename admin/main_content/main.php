<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Image Upload for Slider
        </div>
        <div class="card-body">
            <form id="sliderUploadForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Choose Image:</label>
                    <input type="file" class="form-control-file" id="slider_image" name="slider_image" accept="image/*">
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
        Video Upload For Home
        </div>
        <div class="card-body">
            <form id="videoUploadForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Choose Video:</label>
                    <input type="file" class="form-control-file" id="videoFile" name="videoFile">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <div id="preview_video"></div>
        </div>
    </div>
</div>