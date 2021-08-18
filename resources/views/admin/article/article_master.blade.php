<div class="modal-body row">
    <!-- image -->
    <div class="form-group col-md-12">
        <label>Image:</label>
        <input type="file" name="image" placeholder="Image" class="form-control image">
        <div class="col-md-3 preview_wrapper" hidden>
            <img src="<?php echo(asset('img/noimg.jpg')); ?>" class="preview_image" alt="" width="100%">
        </div>
    </div>
    <!-- content -->
    <div class="form-group col-md-12">
        <label>Content:</label>
        <textarea type="text" name="content" placeholder="Content" class="form-control content"></textarea>
    </div>
    <!-- link -->
    <div class="form-group col-md-12 col-sm-3">
        <label>Link:</label>
        <input type="text" name="link" placeholder="Link" class="form-control link" required>
    </div>
</div>