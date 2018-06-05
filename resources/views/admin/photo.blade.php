@extends('layouts.admin')

@section('breadcrumb')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>All Photos</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="/admin/photos">Photos</a></li>
            <li class="active">All photos</li>
          </ol>
        </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="content mt-3" style="padding: 0;">
  <div class="animated fadeIn">
  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <strong class="card-title">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#uploadmodal">
                          Upload <i class="ti-gallery"></i>
                </button>
              </strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
              @foreach($photos as $photo)
                <tr>
                  <td><img src="../{{$photo->url_image}}" alt="{{$photo->name}}"></td>
                  <td>{{$photo->name}}</td>
                  <td>{{$photo->category->name}}</td>
                  <td style>
                    <a style="cursor:pointer;" onClick="editForm({{$photo->id}})" data-toggle="modal" data-target="#editmodal"><i class="ti-pencil-alt text-primary"></i></a>
                    <a style="cursor:pointer;" onClick="deleteItem({{$photo->id}})"><i class="ti-trash text-danger"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
 
  </div><!-- .animated -->
</div><!-- .content -->

<!-- upload modal -->
<div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadModalLabel">Upload Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" class="form-horizontal" id="upload_form">
          <div class="row form-group">
            <div class="col col-md-6">
              <div class="row form-group">
                <div class="col-12">
                  <input type="file" id="file-input" name="image" class="form-control-file">
                  <img id="blah" src="{{asset('assets/img/default.jpg')}}" alt="your image" />
                </div>
              </div>
            </div>
            <div class="col col-md-6">
              <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Photo title" class="form-control"></div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Photo Category</label></div>
                <div class="col-12 col-md-9">
                  <select name="select" id="select" class="form-control">
                    <option value="0">Please select category of photo</option>
                    <option value="1">Portraits</option>
                    <option value="2">Weddings</option>
                    <option value="3">Studio</option>
                    <option value="4">Fashion</option>
                    <option value="5">Lifestyle</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3"><label class="form-control-label">Slideshow</label></div>
                <div class="col col-md-3"><label class="switch switch-3d switch-primary mr-3"><input id="checkbox" type="checkbox" name="slideshow" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label></div>
              </div>
              <div class="row form-group justify-content-end">
                <button type="button" class="btn btn-secondary m-2" data-dismiss="modal" id="reset">Cancel</button>
                <button type="submit" class="btn btn-primary m-2" id="uploadButton">Upload</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- edit modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" class="form-horizontal" id="edit_form">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
  <script>
    function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
    }

    $("#file-input").change(function() {
      readURL(this);
    });
  </script>
  <script>
    $("#reset").click(function() {
      $("#file-input").val("");
      $('#blah').attr('src', "../assets/img/default.jpg");
      $("#text-input").val("");
      $("#select").val("0");
      $("#checkbox").attr('checked', "false");
    });
  </script>
  <script>
    $('#upload_form').submit(function(e) {
      e.preventDefault();
      var formData = new FormData($(this)[0]);
      $.ajax({
          url: '/api/photos',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          type: 'POST',
          success:function() {
            swal("Success!", "You photo has been uploaded!", "success");
          }
      });
    });

    // delete image
    function deleteItem(id){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this photo!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: '/api/photos/'+id,
            cache: false,
            contentType: false,
            processData: false,
            type: 'delete',
            success:function() {
              swal("Poof! Your photo has been deleted!", {
                icon: "success",
              });
            }
          });
        } else {
          swal("Your photo is safe!");
        }
      });
    }

    //update edit form
    function editForm(id){
      $.ajax({
        url: '/api/photos/'+id,
        cache: false,
        contentType: false,
        processData: false,
        type: 'get',
        success:function(data) {
          $('#edit_form').html(data);
        }
      });
    }

    //update photo

    $('#edit_form').submit(function(e){
      e.preventDefault();
      var id = $('#editButton').attr('data-id');
      var is_slide_show = $('#edit-checkbox').prop('checked');
      $.ajax({
          url: '/api/photos/'+id,
          data: {
            "is_slide_show": 0
          },
          type: 'PUT',
          success:function() {
            swal("Success!", "You photo has been updated!", "success");
          }
      });
    })
  </script>

@endsection