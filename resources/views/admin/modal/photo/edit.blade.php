
<div class="row form-group">
  <div class="col col-md-6">
      <div class="row form-group">
      <div class="col-12">
          <input type="file" id="file-input" name="image" class="form-control-file">
          <img style="max-height: 350px;" id="blah" src="../../{{$photo->url_image}}" alt="{{$photo->name}}" />
      </div>
      </div>
  </div>
  <div class="col col-md-6">
      <div class="row form-group">
      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
      <div class="col-12 col-md-9"><input type="text" id="edit-text-input" value="{{$photo->name}}" name="title" placeholder="Photo title" class="form-control"></div>
      </div>
      <div class="row form-group">
      <div class="col col-md-3"><label for="select" class=" form-control-label">Photo Category</label></div>
      <div class="col-12 col-md-9">
          <select name="select" id="edit-select" class="form-control">
          <option value="0">Please select category of photo</option>
          <option value="1" @if(($photo->category_id) == 1) selected="selected" @endif>Portraits</option>
          <option value="2" @if(($photo->category_id) == 2) selected="selected" @endif>Weddings</option>
          <option value="3" @if(($photo->category_id) == 3) selected="selected" @endif>Studio</option>
          <option value="4" @if(($photo->category_id) == 4) selected="selected" @endif>Fashion</option>
          <option value="5" @if(($photo->category_id) == 5) selected="selected" @endif>Lifestyle</option>
          </select>
      </div>
      </div>
      <div class="row form-group">
      <div class="col col-md-3"><label class="form-control-label">Slideshow</label></div>
      <div class="col col-md-3"><label class="switch switch-3d switch-primary mr-3"><input id="edit-checkbox" type="checkbox" name="slideshow" class="switch-input" @if(($photo->is_slide_show) === 1) checked="true" @endif> <span class="switch-label"></span> <span class="switch-handle"></span></label></div>
      </div>
      <div class="row form-group justify-content-end">
        <button type="button" class="btn btn-secondary m-2" data-dismiss="modal">Cancel</button>
        <button id="editButton" data-id="{{$photo->id}}" type="submit" class="btn btn-primary m-2">Update</button>
      </div>
  </div>
</div>
