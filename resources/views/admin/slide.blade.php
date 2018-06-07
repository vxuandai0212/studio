@extends('layouts.admin')

@section('breadcrumb')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Slideshow</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/admin/slides">Slideshow</a></li>
                            <li class="active">All slideshow</li>
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
                  <td><img src="https://res.cloudinary.com/fit1501040028/image/upload/v1528381017/{{$photo->url_image}}" alt="{{$photo->name}}"></td>
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