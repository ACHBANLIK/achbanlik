@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/full-loader.css') }}">


<style>
  #loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;
    background: #222222;
    z-index: 1000;
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
                             Trophies
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Points</th>
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
                    <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                      <span class="help-block errorName"></span>
                  </div>


                  <div class="form-group">
                    <label for="points">Points</label>
                      <input id="points" type="text" class="form-control" name="points" value="{{ old('points') }}" required autofocus>
                      <span class="help-block errorPoints"></span>
                  </div>


                  <div class="form-group">
                    <label for="description">Description</label>
                      <input id="description" type="description" class="form-control" name="description" password="{{ old('description') }}" required autofocus>
                      <span class="help-block errorDescription"></span>
                  </div>


                  <div class="form-group">
                      <label for="image">Photo</label>
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
                    <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                      <span class="help-block errorName"></span>
                  </div>


                  <div class="form-group">
                    <label for="points">Points</label>
                      <input id="points" type="text" class="form-control" name="points" value="{{ old('points') }}" required autofocus>
                      <span class="help-block errorPoints"></span>
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                      <textarea id="description" type="text" class="form-control" name="description"> value="{{ old('description') }}" required autofocus> </textarea>
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
                    Admin
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="showForm" role="form">


                <center>
                  <div class="form-group">
                      <img  id="showimage" style="max-width:200px;max-height:200px;"/>
                  </div>
                </center>
      
                  <div class="form-group">
                    <label for="id">Id</label>
                      <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" disabled="disabled">
                  </div>



                  <div class="form-group">
                    <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" disabled="disabled">                  
                  </div>




                  <div class="form-group">
                    <label for="points">Points</label>
                      <input id="points" type="text" class="form-control" name="points" value="{{ old('points') }}" disabled="disabled">
                  </div>


                  <div class="form-group">
                    <label for="description">Description</label>
                      <textarea id="description" type="text" class="form-control" name="description"> value="{{ old('description') }}" disabled="disabled"></textarea>
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
                    Are you sure you want to delete <span id="name"></span>?
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
         $("#editModal #name").val($(e.relatedTarget).data('name'));
         $("#editModal #points").val($(e.relatedTarget).data('points'));
         $("#editModal #description").val($(e.relatedTarget).data('description'));
         $("#editModal #id").val($(e.relatedTarget).data('id'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#editModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
    });


    $('#deleteModal').on("show.bs.modal", function (e) {
         $("#deleteModal #name").html($(e.relatedTarget).data('name'));
         $("#deleteModal #points").html($(e.relatedTarget).data('points'));
         $("#deleteModal #id").val($(e.relatedTarget).data('id'));
    });


    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #name").val($(e.relatedTarget).data('name'));
         $("#showModal #points").val($(e.relatedTarget).data('points'));
         $("#showModal #description").val($(e.relatedTarget).data('description'));
         $("#showModal #id").val($(e.relatedTarget).data('id'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
      });


$("#addModal #photo").change(function () { 
  readURL(this , "#addModal");
});


$("#editModal #photo").change(function () { 
  readURL(this , "#editModal");
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
                url: 'trophies',
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData($('#addForm')[0]),

                    success: function(data) {
                    
                     $("#addModal #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.name) {
                            $('#addForm #name').parent(".form-group").addClass('has-error');
                            $('#addForm .errorName').html("<strong>"+data.errors.name+"<strong>");
                        }
                        if (data.errors.points) {
                            $('#addForm #points').parent(".form-group").addClass('has-error');
                            $('#addForm .errorPoints').html("<strong>"+data.errors.points+"<strong>");
                        }
                        if (data.errors.description) {
                            $('#addForm #description').parent(".form-group").addClass('has-error');
                            $('#addForm .errorDescription').html("<strong>"+data.errors.description+"<strong>");
                        }   
                        if (data.errors.photo) {
                            $('#addForm #photo').parent(".form-group").addClass('has-error');
                            $('#addForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                                
                    } else {
                        $("#addModal").modal("hide"); 
                        $("#addForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('Successfully created admin!', 'Success Alert', {timeOut: 5000});
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
                url: 'trophies/'+$("#editModal #id").val(),             
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

                        if (data.errors.name) {
                            $('#editForm #name').parent(".form-group").addClass('has-error');
                            $('#editForm .errorName').html("<strong>"+data.errors.name+"<strong>");
                        }
                        if (data.errors.points) {
                            $('#editForm #points').parent(".form-group").addClass('has-error');
                            $('#editForm .errorPoints').html("<strong>"+data.errors.points+"<strong>");
                        }
                        if (data.errors.photo) {
                            $('#editForm #photo').parent(".form-group").addClass('has-error');
                            $('#editForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                                
                    } else {
                        $("#editModal").modal("hide"); 
                        $("#editForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('Successfully edited trophy!', 'Success Alert', {timeOut: 5000});
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
      url: 'trophies/' + $("#deleteModal #id").val(),
      data: 
      {
        '_token': $('input[name=_token]').val(),
      },
      success: function(data) {
      
        $("#deleteModal #submit").button('reset');
        $("#deleteModal").modal("hide");   

        $('#admins-table').DataTable().draw(false)
        toastr.success('Successfully deleted Trophy!', 'Success Alert', {timeOut: 5000});
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
        ajax: '{{ route('admin.gettrophies') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'points', name: 'points' },
            { data: 'description', name: 'description' },


            {
                    name: 'actions',
                    data: null,
                    sortable: false,
                    searchable: false,
                    render: function (data) {
                        var actions = '';
                        actions += '<a data-toggle="modal"  data-id=":id" data-name=":name" data-points=":points" data-description=":description"   data-photo=":photo" data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-name=":name" data-points=":points" data-description=":description"  data-photo=":photo"  data-target="#editModal"><span class="glyphicon glyphicon-edit"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-name=":name" data-points=":points" data-description=":description"  data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                        return actions.replace(/:id/g, data.id).replace(/:name/g, data.name).replace(/:points/g, data.points).replace(/:description/g, data.description).replace(/:photo/g, data.photo);
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





  
