@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/full-loader.css') }}">


<style>

td
{
      text-overflow: ellipsis;
}

  #loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;
    background: #222222;
    z-index: 1000;
}
}
 
#loader-wrapper .loader-section.section-left {
    left: 0;
}
 
#loader-wrapper .loader-section.section-right {
    right: 0;
}
</style>
@endpush


@section('content')


  <!-- page start-->

    <section class="panel">

                          <header class="panel-heading">
                              Categories
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Date de création</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                              </table>
                            </div>


                          
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                              <span class="glyphicon glyphicon-plus"></span> Nouveau
                            </button> 



                          </div>
                         

    

   </section>


 <!-- page end-->
  




<!-- Add Modal -->
<div class="modal fade " id="addModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    New
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="addForm" role="form" method="POST" enctype="multipart/form-data">
    
                  <div class="form-group">
                    <label for="">Title</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                      <span class="help-block errorTitle"></span>
                  </div>


                  <div class="form-group">
                    <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" required autofocus>{{ old('description') }}</textarea>
                      <span class="help-block errorDescription"></span>
                  </div>


                  <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="file" id="photo" name="photo">
                      <span class="help-block errorPhoto"></span>
                      <br>
                      <img src="{{ asset('img/placeholder.svg') }}" id="showimage" style="max-width:100px;max-height:100px;"/>
                      
                  </div>



                  <div class="clearfix">
                    <button type="button" id="submit" class="btn btn-primary btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Valider</button>
                  </div>

                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Add Modal -->



<!-- Edit Modal -->
<div class="modal fade " id="editModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Edit
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="editForm" role="form" enctype="multipart/form-data">
    
                  

                  <input type="hidden" name="id" id="id" value="">



                  <div class="form-group">
                    <label for="title">Title</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                      <span class="help-block errorName"></span>
                  </div>


                  <div class="form-group">
                    <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" required autofocus>{{ old('description') }}</textarea>
                      <span class="help-block errorDescription"></span>
                  </div>


                  <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="file" id="photo" name="photo">
                      <span class="help-block errorPhoto"></span>
                      <br>
                      <img src="{{ asset('img/placeholder.svg') }}" id="showimage" style="max-width:100px;max-height:100px;"/>
                      
                  </div>


                  <div class="clearfix">
                    <button type="button" id="submit" class="btn btn-primary btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Valider</button>
                  </div>

                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Edit Modal -->


<!-- Show Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Categories
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="showForm" role="form">


                <center>
                  <div class="form-group">
                      <img  id="showimage" style="max-width:100px;max-height:100px;"/>
                  </div>
                </center>
      
                  <div class="form-group">
                    <label for="id">Id</label>
                      <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" disabled="disabled">
                  </div>



                  <div class="form-group">
                    <label for="title">Title</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" disabled="disabled">                  
                  </div>



                  <div class="form-group">
                    <label for="created_at">Date de création</label>
                      <input id="created_at" type="text" class="form-control" name="created_at" value="{{ old('created_at') }}" disabled="disabled">
                  </div>



                  <div class="form-group">
                    <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" disabled="disabled"></textarea>
                  </div>






                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Show Modal -->



<!-- Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Are you sure you want to delete <span id="title"></span>?
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" id="confirmForm" method="POST">

                  <input type="hidden" name="id" id="id" value="">
                  
                  <center>
                    <button  type="button" data-dismiss="modal"  class="btn btn-danger btn-lg btn-bloc">Non</button>
                    <button id="submit" type="button" class="btn btn-primary btn-lg btn-bloc" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours" >Oui</button>

                  </center>

                </form>
                
                
            </div>

        </div>
    </div>
</div>

<!-- Edit Modal -->


@stop


@push('scripts')



<script src="{{ asset('assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>




        <script>

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {


    //$("#addModal").modal("show"); 


    $('#editModal').on("show.bs.modal", function (e) {
         $("#editModal #title").val($(e.relatedTarget).data('title'));
         $("#showModal #created_at").val($(e.relatedTarget).data('created_at'));
         $("#editModal #description").val($(e.relatedTarget).data('description'));
         $("#editModal #id").val($(e.relatedTarget).data('id'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#editModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
    });


    $('#deleteModal').on("show.bs.modal", function (e) {
         $("#deleteModal #title").html($(e.relatedTarget).data('title'));
         $("#deleteModal #description").html($(e.relatedTarget).data('description'));
         $("#deleteModal #id").val($(e.relatedTarget).data('id'));
    });


    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #title").val($(e.relatedTarget).data('title'));
         $("#showModal #created_at").val($(e.relatedTarget).data('created_at'));
         $("#showModal #description").val($(e.relatedTarget).data('description'));
         $("#showModal #id").val($(e.relatedTarget).data('id'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));

      });






$("#addModal #submit").click(function(e)
{


$("#addModal #submit").button('loading');


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

  $.ajax({
                type: 'POST',
                url: 'categories',
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData($('#addForm')[0]),

                    success: function(data) {
                    
                    console.log(data);
                     $("#addModal #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.description) {
                            $('#addForm #title').parent(".form-group").addClass('has-error');
                            $('#addForm .errorTitle').html("<strong>"+data.errors.title+"<strong>");
                        }
                        if (data.errors.description) {
                            $('#addForm #description').parent(".form-group").addClass('has-error');
                            $('#addForm .errorDescription').html("<strong>"+data.errors.description+"<strong>");
                        }
                         
                    } else {
                        $("#addModal").modal("hide"); 
                        $("#addForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('Successfully created Category!', 'Success Alert', {timeOut: 5000});
                    }
                },
                  error:function()
                  {
                     $("#addModal #submit").button('reset');
                  }
            });




});





$("#editModal #submit").click(function(e)
{


$("#editModal #submit").button('loading');


var formData  = new FormData($('#editForm')[0])
  formData.append('_method', 'PUT');  


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});


  $.ajax({
                type: 'post',
                url: 'categories/'+$("#editModal #id").val(),             
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function(data) {
                      $("#editModal #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Validation error!', 'edit Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.title) {
                            $('#editForm #title').parent(".form-group").addClass('has-error');
                            $('#editForm .errorTitle').html("<strong>"+data.errors.title+"<strong>");
                        }
                        if (data.errors.description) {
                            $('#editForm #description').parent(".form-group").addClass('has-error');
                            $('#editForm .errordescription').html("<strong>"+data.errors.description+"<strong>");
                        }
                             
                    } else {
                        $("#editModal").modal("hide"); 
                        $("#editForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('Successfully edited Category!', 'Success Alert', {timeOut: 5000});
                    }
                },
                  error:function()
                  {
                    $("#editModal #submit").button('reset');
                  }

            });        

});






$("#deleteModal #submit").click(function(e)
{
     $("#deleteModal #submit").button('loading');
  $.ajax({
      type: 'DELETE',
      url: 'categories/' + $("#deleteModal #id").val(),
      data: 
      {
        '_token': $('input[name=_token]').val(),
      },
      success: function(data) {
      
        $("#deleteModal #submit").button('reset');
        $("#deleteModal").modal("hide");   

        $('#admins-table').DataTable().draw(false)
        toastr.success('Successfully deleted Category!', 'Success Alert', {timeOut: 5000});
      },
       error:function()
       {
      $("#deleteModal #submit").button('reset');
        }
    });
});



    var table  =  $('#admins-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getcategories') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'created_at', name: 'created_at' },
            { data: 'description', name: 'description' },
          

            {
                    name: 'actions',
                    data: null,
                    sortable: false,
                    searchable: false,
                    render: function (data) {
                        var actions = '';
                        actions += '<a data-toggle="modal"  data-id=":id" data-title=":title" data-description=":description" data-created_at=":created_at" data-photo=":photo" data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-title=":title" data-description=":description" data-created_at=":created_at" data-photo=":photo" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                        return actions.replace(/:id/g, data.id).replace(/:title/g, data.title).replace(/:description/g, data.description).replace(/:photo/g, data.photo).replace(/:created_at/g, data.created_at);
                    }
            }

                        ]
    });




});




function readURL(input , id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) 
    {
      $(id+' #showimage').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
   





            </script>


@endpush





  
