
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
        Add Destination Details
        </div>
        <div class="card-body">
            <form id="desUploadForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="destinationName" class="form-label">Destination Name</label>
                    <input type="text" class="form-control" id="destinationName" name="des_name">
                </div>
                <div class="form-group">
                    <label for="destinationHour" class="form-label">Number of tour places</label>
                    <input type="number" class="form-control" id="destinationHour" name="des_hour">
                </div>
                <div class="form-group my-2">
                    <label for="image">Thumbnail Image:</label>
                    <input type="file" class="form-control-file" id="Thumbnail_image" name="Thumbnail_image">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <div id="preview_des"></div>
        </div>
    </div>
</div>


